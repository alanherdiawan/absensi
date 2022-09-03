<?php 
    session_start();
    $_SESSION['session_username'] = $UserName;
    session_destroy();
    header('location:login.php');
?>