<?php
    // Get form data
    $id = $_POST['id'];

    // Connect to database (replace with your own database credentials)
    $conn = mysqli_connect("localhost", "username", "password", "dbname");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Delete user data from database
    $sql = "DELETE FROM users WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "User data deleted successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
?>
