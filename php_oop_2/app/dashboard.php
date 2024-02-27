<?php
    
    include_once '../app/auth.php';
    echo $_SESSION['user_id'];
?>

<h1>Dashboard</h1>
<a href="../auth/logout.php">Logout</a>