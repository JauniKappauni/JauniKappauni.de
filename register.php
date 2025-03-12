<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Register</h1>
    <a href="index.php">Back</a>
    <form>
        <label for="firstname">First Name</label>
        <br>
        <input type="text" id="firstname" required>
        <br>
        <label for="lastname">Lastname</label>
        <br>
        <input type="text" id="lastname" required>
        <br>
        <label for="birthdate">Birth Date</label>
        <br>
        <input type="date" id="birthdate" required>
        <br>
        <label for="username">Username</label>
        <br>
        <input type="text" id="username" required>
        <br>
        <label for="email">Email-Address</label>
        <br>
        <input type="text" id="email" required>
        <br>
        <label for="password">Password</label>
        <br>
        <input type="password" id="password" required>
        <br>
        <input type="submit" value="Register">
    </form>
</body>
</html>