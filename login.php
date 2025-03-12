<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Login</h1>
    <a href="index.php">Back</a>
    <form method="post">
        <label for="username/email-address">Username/Email-Address</label>
        <br>
        <input type="text" id="username/email-address" required>
        <br>
        <label for="Password">Password</label>
        <br>
        <input type="password" id="password" required>
        <br>
        <input type="submit" value="Login">
    </form>
    <a href="resetpassword.php">Forget Password?</a>
</body>
</html>