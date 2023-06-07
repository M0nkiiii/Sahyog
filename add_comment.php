    <?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the values from the form
    $postId = $_POST["post_id"];
    $commentContent = $_POST["comment_content"];

    // Create a new database connection
    $conn = new mysqli('localhost', 'root', '', 'user_db');

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the INSERT query to add the comment to the comments table
    $query = "INSERT INTO comments (post_id, content) VALUES ($postId, '$commentContent')";
    if ($conn->query($query) === TRUE) {
        echo "Comment added successfully";
    } else {
        echo "Error adding comment: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request";
}
?>
