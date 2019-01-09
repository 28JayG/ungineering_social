<?php
session_start();
    
    $hostname = "localhost";
    $username = "root";
    $db_password = "123456";
    $db_name = "social_media";
    
    $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $status=$_POST['status'];
    $id=$_SESSION['id'];
    
    $sql = "INSERT INTO statuses(status,user_id)
                VALUES('$status','$id')";
    
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }
    echo "your status  ".$status;
    mysqli_close($conn);
?>