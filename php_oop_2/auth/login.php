<?php

    include_once '../app/logged.php';
    include_once '../auth/user.php';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $user = new User;

        $user->email = $_POST['email'];
        $user->password = $_POST['password'];

        $user->login();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    <?php
        if(isset($_SESSION['registered'])){
            ?>
            <p><?= $_SESSION['registered'] ?></p>
            <?php
            unset($_SESSION['registered']);
        }
    ?>
    <form action="login.php" method="post">
        
        <div>
            <label for="">Email:</label>
            <input type="text" name="email" id="">
        </div>
        <div>
            <label for="">Password:</label>
            <input type="text" name="password" id="">
        </div>
        <input type="submit" value="Submit">
        <a href="register.php">Register</a>
    </form>
</body>
</html>