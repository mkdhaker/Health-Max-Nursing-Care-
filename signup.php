<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password for security

    // Save data to a file (you might want to use a database in a real application)
    $file = fopen("user_data.txt", "a");
    fwrite($file, "Username: $username, Email: $email, Password: $password\n");
    fclose($file);

    // Redirect to a success page or login page
    header("Location: login.html");
    exit();
}
?>