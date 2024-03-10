<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations-v1.0.4.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <div class="container">
        <?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["firstname"] . ' ' . $_POST["lastname"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];

           $lot_blk = $_POST["lot_blk"];
           $street = $_POST["street"];
           $phase_subdivision = $_POST["phase_subdivision"];
           $barangay = $_POST["barangay"];
           $city = $_POST["city"];
           $province = $_POST["province"];
           $country = $_POST["country"];
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($fullName) || empty($email) || empty($password) || empty($passwordRepeat) || empty($lot_blk) || empty($street) || empty($phase_subdivision) || empty($barangay) || empty($city) || empty($province) || empty($country)) {
            array_push($errors,"All fields are required");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($password) < 8) {
            array_push($errors,"Password must be at least 8 characters long");
           }
           if ($password !== $passwordRepeat) {
            array_push($errors,"Password does not match");
           }
           require_once "database.php";
           $sql = "SELECT * FROM users WHERE email = ?";
           $stmt = mysqli_stmt_init($conn);
           if (mysqli_stmt_prepare($stmt, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if (mysqli_num_rows($result) > 0) {
                    array_push($errors,"Email already exists!");
                }
           }
           if (count($errors) > 0) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
           } else {
                $sql = "INSERT INTO users (full_name, email, password, lot_blk, street, phase_subdivision, barangay, city, province, country) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (mysqli_stmt_prepare($stmt, $sql)) {
                    mysqli_stmt_bind_param($stmt, "ssssssssss", $fullName, $email, $passwordHash, $lot_blk, $street, $phase_subdivision, $barangay, $city, $province, $country);
                    if (mysqli_stmt_execute($stmt)) {
                        echo "<div class='alert alert-success'>You are registered successfully.</div>";
                    } else {
                        echo "<div class='alert alert-danger'>Oops! Something went wrong.</div>";
                    }
                } else {
                    echo "<div class='alert alert-danger'>Oops! Something went wrong.</div>";
                }
           }
           mysqli_stmt_close($stmt);
           mysqli_close($conn);
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" class="form-control" name="lastname" placeholder="Last Name">
            </div>
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" class="form-control" name="firstname" placeholder="First Name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="repeat_password">Repeat Password</label>
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password">
            </div>
            <div class="form-group">
                <label for="lot_blk">Address</label>
                <input type="text" class="form-control" name="lot_blk" placeholder="Lot/Blk">
            </div>
            <div class="form-group">
                <label for="street">Street</label>
                <input type="text" class="form-control" name="street" placeholder="Street">
            </div>
            <div class="form-group">
                <label for="phase_subdivision">Phase/Subdivision</label>
                <input type="text" class="form-control" name="phase_subdivision" placeholder="Phase/Subdivision">
            </div>
            <div class="form-group">
                <label for="barangay">Barangay</label>
                <input type="text" class="form-control" name="barangay" placeholder="Barangay">
            </div>
            <div class="form-group">
                <label for="city">City/Municipality</label>
                <input type="text" class="form-control" name="city" placeholder="City/Municipality">
            </div>
            <div class="form-group">
                <label for="province">Province</label>
                <input type="text" class="form-control" name="province" placeholder="Province">
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" class="form-control" name="country" placeholder="Country">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form>
        <div>
        <div><p>Already Registered <a href="login.php">Login Here</a></p></div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations-v1.0.4.js"></script>
    <script>
        $(document).ready(function(){
            // Initialize PH Locations plugin for dropdowns
            $('#barangay').ph_locations({'location_type': 'barangays'});
            $('#city').ph_locations({'location_type': 'cities'});
            $('#province').ph_locations({'location_type': 'provinces'});
            $('#country').ph_locations({'location_type': 'countries'});
        });
    </script>
</body>
</html>
