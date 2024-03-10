<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
   exit; // Terminate script execution after redirection
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Delos Reyes Portfolio</title>
</head>

<body>

  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#home">
            <h1><span>M</span>y <span>P</span>ortfolio</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#home" data-after="Home">Home</a></li>
            <li><a href="#Profile" data-after="Service">Profile</a></li>
            <li><a href="#interests" data-after="Projects">Interests</a></li>
            <li><a href="logout.php"><u><b>Logout</b></u></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->

  <!-- home Section  -->
  <section id="home">
    <div class="hero container">
      <div>
        <h1>HELLO! <span></span></h1>
        <h1>My Name is <span></span></h1>
        <h1>Kurt Delos Reyes <span></span></h1>
        <a href="resume.pdf" target="_blank" rel="noopener noreferrer" type="button" class="cta">Download CV</a>
      </div>
    </div>
  </section>
  <!-- End home Section  -->

<!-- Profile Section -->
<section id="Profile">
  <div class="services container">
    <div class="services-top">
      <h1 class="services-title">Ab<span>o</span>ut Me</h1>
      <!-- Add an image here -->
      <div class="about-image">
        <img src="./img/profpic.jpg" alt="About Me Image">
      </div>
      <p>Welcome to the about me section of my portfolio. Here you will find information about me, such as my interests, skills, achievements, etc.!</p>
    </div>
    <div class="services-bottom">
        <div class="services-item">
          <h2>Personal Information</h2>
            <p>My full name is <b>Kurt Jyrell Dela Rosa Delos Reyes</b></p>
<p>I'm a student at NU Fairview, <b>BSIT-MI</b> 2nd Year Course</p>
<pre> ... </pre>
<p>I am <b>20</b> years old</p>
<p>and my birthdate is <b>February 28, 2003</b></p>
<pre> ... </pre>
<p><b>Senior High School:</b></p>
<p> Horacio Dela Costa High School </p>
<pre> ... </pre>
<p><b>High School:</b></p>
<p>Mater Carmeli Novaliches School</p>
<pre> ... </pre>
<p><b>Elementary:</b></p>
<p> Mater Carmeli Novaliches School</p>
        </div>
        <div class="services-item">
          <h2>Short Term & Long Term Goals</h2>
          <p> Graduate College </p>
<pre> ... </pre>
	  <p> Own my own car and learn how to drive one. </p>
<pre> ... </pre>
	  <p> Visit different places within the Philippines or in other countries. </p>
<pre> ... </pre>
	  <p> Establish a stable and successful business </p>
<pre> ... </pre> 
	  <p> Explore and try different cuisines of different cultures</p>
        </div>
        <div class="services-item">
          <h2>Skills</h2>
          <p> Strategic thinking &nbsp&nbsp&nbsp&nbsp&nbsp Team collaboration &nbsp&nbsp&nbsp&nbsp&nbsp Decision-making under pressure </p>
	  <p> Analytical skills  &nbsp&nbsp&nbsp&nbsp&nbsp Time Management &nbsp&nbsp&nbsp&nbsp&nbsp Priotization </p>
	  <p> Planning & Coordination &nbsp&nbsp&nbsp&nbsp&nbsp Attention to detail &nbsp&nbsp&nbsp&nbsp&nbsp Multitasking </p>
	  <p> Critical Thinking &nbsp&nbsp&nbsp&nbsp&nbsp Analytical Reasoning &nbsp&nbsp&nbsp&nbsp&nbsp Creativity </p>
	  <p> Adaptability &nbsp&nbsp&nbsp&nbsp&nbsp Logical Deduction </p>
        </div>
        <div class="services-item">
          <h2>Personal Achievements</h2>
          <p>NCII Information Technology Certificate Grantee [2018]</p>
	  <p>Outreach Program Volunteer[2019]</p>
	  <p>1st Year - 1st Semester & 2nd Semester Deans Lister[2021]</p>
	  <p>Church Outreach Program Volunteer[2023]</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Profile Section -->

  <!-- interests Section -->
  <section id="interests">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title"> Inte<span>rests</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>Adventure Travel</h1>
            <h2>Seeking out unique experiences</h2>
            <p> Driven by curiosity, I enthusiastically explore anything that catches my interest, constantly seeking new experiences for personal growth. My pursuits, however, deliberately exclude harmful influences like cigarettes, alcohol, or drugs, ensuring a positive and fulfilling lifestyle.</p>
          </div>
          <div class="project-img">
            <img src="./img/adv.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Literature</h1>
            <h2>Reading books</h2>
            <p>I really enjoy reading books, especially ones with mystery, adventure, or science fiction stories. Getting lost in these kinds of books, where exciting things happen or mysteries unfold, is something I love to do in my free time.</p>
          </div>
          <div class="project-img">
            <img src="./img/rizz.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Video Games</h1>
            <h2>Discover new games</h2>
            <p>I like playing games, and sometimes I get so into a game that I lose track of how much time I spend playing it. I try to get really good at the games I play, and it's easy to forget about time when I'm having fun.</p>
          </div>
          <div class="project-img">
            <img src="./img/valo.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Outdoor Exploration</h1>
            <h2>Hiking or Camping</h2>
            <p>I'm drawn to hiking and camping, inspired by videos I've watched. The idea of being outdoors, free to explore and connect with nature, appeals to me. It seems like a great way to escape and appreciate the freedom of the outdoors.</p>
          </div>
          <div class="project-img">
            <img src="./img/islands.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Film and TV series</h1>
            <h2>Watching movies or TV series</h2>
            <p>I really enjoy watching movies and TV series, especially ones with interesting stories, mysteries, or adventurous themes. Getting lost in these shows is a favorite pastime of mine.</p>
          </div>
          <div class="project-img">
            <img src="./img/movie.jpeg" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End interests Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2><b>+63 696 288 265</b></h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>My Emails</h1>
            <h2>delosreyeskd@students.nu-fairview.edu.ph </h2>
	    <pre> ... </pre>
            <h2>kurtjyrell432@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Dela Costa Homes II, Barangay 179, Caloocan City, Philippines</h2>
          </div>
        </div>
<!-- Button container -->
<div class="button-container">
  <a href="https://github.com/heijirynx/suzuyunn" target="_blank"><u><b>Github</u></b></a>
  <a href="https://www.linkedin.com/in/kurtdelosreyes/" target="_blank"><u><b>LinkedIn</u></b></a>
  <a href="https://twitter.com/HeijiXxiv="_blank"><u><b>Twitter</u></b></a>
</div>

      </div>
    </div>
  </section>
  <!-- End Contact Section -->


  <script src="./app.js"></script>
</body>

</html>
