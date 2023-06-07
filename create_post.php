<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $postTitle = $_POST['post_title'];
  $postContent = $_POST['post_content'];

  // TODO: Perform validation on the form data

  // Create a new database connection
  $conn = new mysqli('localhost', 'root', '', 'user_db');

  // Check if the connection was successful
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Prepare the insert statement
  $stmt = $conn->prepare("INSERT INTO posts (user_id, title, content) VALUES (?, ?, ?)");

  // TODO: Replace 'user_id' with the appropriate user ID of the current admin
  $adminId = 1; // Example admin ID

  // Bind the parameters to the statement
  $stmt->bind_param("iss", $adminId, $postTitle, $postContent);

  // Execute the statement
  $stmt->execute();

  // Close the statement and database connection
  $stmt->close();
  $conn->close();

  // Redirect back to the posts.php page after the post is created
  header("Location: posts.php");
  exit();
}
?>
