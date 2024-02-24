<?php
    session_start();
    $_SESSION["name"] = "lalit";
?>

<html>
    <body>
        <h1>asd</h1>
        <?php
            echo $_SESSION['name'];
        ?>
    