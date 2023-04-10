<?php
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate email using PHP filter
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Error: Invalid email format");
    }

    // Check if password matches confirm password
    if ($password != $confirm_password) {
        die("Error: Password and confirm password do not match");
    }

    // Connect to database (replace with your own database credentials)
    $conn = mysqli_connect("localhost", "username", "password", "dbname");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert data into database
    $sql = "INSERT INTO members (name, email, contact, address, password) VALUES ('$name', '$email', '$contact', '$address', '$password')";
    if (mysqli_query($conn, $sql)) {
        echo "Registration successful";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
?>
