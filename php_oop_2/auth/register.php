<?php

    include_once "../app/logged.php";
    include_once "../auth/user.php";
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $user = new User;

        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];

        $user->register();
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
    <form action="register.php" method="post">
        <div>
            <label for="">Name:</label>
            <input type="text" name="name" id="">
        </div>
        <div>
            <label for="">Email:</label>
            <input type="text" name="email" id="">
        </div>
        <div>
            <label for="">Password:</label>
            <input type="text" name="password" id="">
        </div>
        <div>
            <label for="">CPassword:</label>
            <input type="text" name="cpassword" id="">
        </div>
        <input type="submit" value="Submit">
        <a href="login.php">Login</a>
    </form>
</body>
</html>