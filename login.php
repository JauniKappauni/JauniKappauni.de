<?php
    include("database.php")
?>
<?php
    include("includes/header.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Login</h1>
    <form action="login.php" method="post">
        <label for="username/email-address">Username/Email-Address</label>
        <br>
        <input type="text" id="username/email-address" name="username" required>
        <br>
        <label for="Password">Password</label>
        <br>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Login">
    </form>
    <a href="resetpassword.php">Forget Password?</a>
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = $conn->query("SELECT password FROM users WHERE user = '$username'");
        if($result->num_rows > 0){
            $user = $result->fetch_assoc();
            if($password == $user["password"]){
                $_SESSION["user"] = $username;
                echo"Login erfolgreich";
                header("Location: dashboard.php");
                exit();
            }
            else{
                echo"Falsches Passwort";
            }
        }
        else{
            echo"Benutzer wurde nicht gefunden";
            }
    }
?>
<?php
    include("includes/footer.html");
?>