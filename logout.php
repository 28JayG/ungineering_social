<?php
    session_destroy();
    session_unset();
    header('location: homepage.php');
    // if(!isset($_SESSION['id'])){
    //     header('location: homepage.php');
    // }
?>