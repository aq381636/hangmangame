<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup Form</title>
    <link rel="stylesheet" href="styler2.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login2.php" method="post">
            <label for="login-username">Username</label>
            <input type="text" id="login-username" name="username" required>
            <label for="login-password">Password</label>
            <input type="password" id="login-password" name="password" required>
            <button type="submit">Login</button>
        </form>

        <h2>Signup</h2>
        <form action="registeration.php" method="post">
            <label for="signup-username">Username</label>
            <input type="text" id="signup-username" name="username" required>
            <label for="signup-password">Password</label>
            <input type="password" id="signup-password" name="password" required>
            <button type="submit">Signup</button>
        </form>
    </div>
</body>
</html>