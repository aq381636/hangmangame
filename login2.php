<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $users = file('users.txt', FILE_IGNORE_NEW_LINES);
    $login_success = false;

    foreach ($users as $user) {
        list($stored_username, $stored_password) = explode(":", $user);
        if ($username == $stored_username && password_verify($password, trim($stored_password))) {
            $login_success = true;
            break;
        }
    }

    if ($login_success) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password!";
    }
}
?>