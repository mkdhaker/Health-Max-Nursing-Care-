<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $confirm_password = $_POST['confirm_password'];

    // Validate password and confirm password
    if ($password !== password_hash($confirm_password, PASSWORD_DEFAULT)) {
        echo 'Passwords do not match.';
        exit;
    }

    // Save the username, email, and hashed password to a file (or a database in a real-world scenario)
    $data = $username . ',' . $email . ',' . $password . PHP_EOL;
    file_put_contents('user_data.txt', $data, FILE_APPEND);

    echo 'Signup successful!';

    // Redirect to the signin page or any other page as needed
    header('Location: signin.html');
    exit;
}
?>
