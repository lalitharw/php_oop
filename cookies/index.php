<?php
    setcookie("name","harwate",time() - 86400 * 2);
?>

<html>
    <body>
        <?php
            if(isset($_COOKIE['name'])){
                echo "Cookie available {$_COOKIE['name']}";
            }
            else{
                echo "Cookie not avaialble";
            }
        ?>
    </body>
</html>