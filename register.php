<?php   
    include("database.php");
?>
<?php
    include("includes/header.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h2>Register</h2>
        username:<br>
        <input type="text" name="username"><br>
        password:<br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="register">
    </form>
    
</body>
</html>
<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username)){
            echo"Please enter a username";
        }
        elseif(empty($password)){
            echo"Please enter a password";
        }
        else{
            $sql = "INSERT INTO users (user, password)
                    VALUES ('$username', '$password')";

            try{
                mysqli_query($conn, $sql);
                echo"You are now registered";
            }
            catch(mysqli_sql_exception){
                echo"That username is taken";
            }
            
        }
    }
    mysqli_close($conn);
?>
<?php
    include("includes/footer.html");
?>