<?php
    include_once '../app/user.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $user = new User;

        $user->email = $_POST['email'];
        $user->password = $_POST['password'];

        if($user->login()){
            echo "Login successful";
           
        }
       
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="POST">
        <div>
            <label for="">Email:</label>
            <input type="text" name="email" placeholder="Enter email" id="">
        </div>
        <div>
            <label for="">Password</label>
            <input type="text" name="password" placeholder="Enter password" id="">
        </div>
        <button>Submit</button>
        <a href="register.php">Register</a>
    </form>
</body>
</html>