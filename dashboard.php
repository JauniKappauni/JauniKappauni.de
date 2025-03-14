<?php
    include("includes/header.html");
?>

<?php
    session_start();

    if (!isset($_SESSION["user"])) {
        header("Location: login.php");
        exit();
    }
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
    <h1>Willkommen, <?php echo $_SESSION["user"]; ?>!</h1>
    <a href="logout.php">Logout</a>
    
</body>
</html>

<?php
    include("includes/footer.html");
?>