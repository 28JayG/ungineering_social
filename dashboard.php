<?php

    session_start();

    //$name=$_GET['name'];
    //$name=$_COOKIE['name'];
    if(isset($_SESSION['id'])){
        $name=$_SESSION['name'];
        echo "Hello ".$name;
    }
?>