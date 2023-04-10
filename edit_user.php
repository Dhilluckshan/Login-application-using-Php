<?php
    // Get form data
    $id = $_POST['id'];
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

    // Update user data in database
    $sql = "UPDATE users SET name='$name', email='$email', contact_no='$contactNo', home_address='$homeAddress' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "User data updated successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
?>
