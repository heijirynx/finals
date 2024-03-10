<?php

$hostName = "sql206.infinityfree.com";
$dbUser = "if0_36118176";
$dbPassword = "TUI8OVUSCphADt";
$dbName = "if0_36118176_database";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>