<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve login credentials
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    // Read user data from the file (you might want to use a database in a real application)
    $userData = file("user_data.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Check if the entered username exists
    foreach ($userData as $user) {
        $userInfo = explode(", ", $user);
        $savedUsername = explode(": ", $userInfo[0])[1];
        $savedPassword = explode(": ", $userInfo[2])[1];

        if ($enteredUsername == $savedUsername && password_verify($enteredPassword, $savedPassword)) {
            // Redirect to a success page or perform additional actions
            header("Location: afterlogin.html");
            exit();
        }
    }

    // If no match found, redirect to a login error page
    header("Location: login_error.html");
    exit();
}
?>