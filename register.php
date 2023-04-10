<!DOCTYPE html>
<html>
<head>
    <title>Member Registration</title>
</head>
<body>
    <h1>Member Registration</h1>
    <form method="post" action="register_process.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="contact">Contact No.:</label>
        <input type="text" id="contact" name="contact" required><br><br>
        <label for="address">Home Address:</label>
        <input type="text" id="address" name="address" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
