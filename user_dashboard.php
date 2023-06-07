<?php
session_start();

if (!isset($_SESSION['user_name'])) {
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel = "icon" href = "images/logo.png"
        type = "image/x-icon">
 
</head>
<body>
<header>
    <nav>
    <a href="user_dashboard.php" class="logo">
        <img src="images/logo.png" alt="Sahyog Logo">
      </a>
    <ul class= nav-links>
        <li><a href="user_dashboard.php">Home</a></li>
        <li><a href="posts.php">Posts</a></li>
        <li><a href="forum(user).php">Forum</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>
    </header>
  <div class="container">
  <div class="container">
    <h1>Welcome to your User Dashboard</h1>
    <p>This is your personalized dashboard where you can manage your posts, view forum, comment and many more.</p>
    
    
    
    <a href="posts.php" class= "cta-button">Create a new post</a>
    
    

    <br>
    <br>
    <br>
    <br>
    <center>
    <div class="about-content">
      <img src="images/idk/HealthViewX-Medicare-Remote-Therapeutic-Monitoring-RTM-Solution.png" style=" width: 500px;"alt="About Us Image" class="about-image">
    </div>
    </center>
    <h2 style="text-align: center;">About Sahyog</h2>
      
      <p class= "about-text" style="text-align: justify;">Sahyog is a leading remote medicare service that aims to provide accessible and high-quality healthcare to individuals in the comfort of their homes. We understand the challenges and limitations of traditional healthcare systems, especially for individuals who are unable to visit medical facilities due to various reasons.
        Our team of experienced doctors, nurses, and medical professionals are dedicated to delivering exceptional healthcare services through telemedicine technology. We leverage the power of advanced communication tools and medical expertise to bridge the gap between patients and healthcare providers.At Sahyog, we offer a range of services, including telemedicine consultations, prescription refills, remote monitoring, and health education. Our user-friendly platform ensures that patients can easily connect with our medical professionals, receive personalized care, and access essential medical resources.We are committed to improving the health and well-being of individuals by providing convenient and reliable healthcare services. Our goal is to enhance the quality of life for our patients and empower them to take control of their health from the comfort and safety of their homes.</p>
      <div class="learn-more">
        <a href="about.html" class="btn" style="display: block; padding: 10px; background-color: #00bf63; color: #fff; text-align: center; text-decoration: none; border-radius: 5px;">Learn More</a>
      </div>
      
    </div>

    
  </div>
</body>
</html>
  </div>
</body>
</html>
