<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sahyog - Register</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <!-- Navigation Bar -->
  <nav>
    <a href="#" class="logo">
      <img src="images/logo.png" alt="Sahyog Logo">
    </a>
    <ul class="nav-links">
      <li><a href="index.html" style="font-size: large;">Home</a></li>
      <li><a href="service.html" style="font-size: large;">Services</a></li>
      <li><a href="about.html" style="font-size: large;">About Us</a></li>
      <li><a href="contact.html" style="font-size: large;">Contact</a></li>
      <li><a href="login.php" style="font-size: large;">Login/Signup</a></li>
    </ul>
  </nav>

  <?php

    include "register_form.php";
  ?>

  <!-- Footer -->
  <footer>
    <div class="footer-container">
      <p>&copy; 2023 Sahyog. All rights reserved.</p>
    </div>
  </footer>

  <!-- JavaScript -->
  <script src="script.js"></script>

</body>
</html>