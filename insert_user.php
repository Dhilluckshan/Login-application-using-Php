<?php
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contactNo = $_POST['contact_no'];
    $homeAddress = $_POST['home_address'];

    // Connect to database (replace with your own database credentials)
    $conn = mysqli_connect("localhost", "username", "password", "dbname");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert user data into database
    $sql = "INSERT INTO users (name, email, contact_no, home_address) VALUES ('$name', '$email', '$contactNo', '$homeAddress')";
    if (mysqli_query($conn, $sql)) {
        echo "User data inserted successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
?>
