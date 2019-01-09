<?php
session_start();
    
    $hostname = "localhost";
    $username = "root";
    $db_password = "123456";
    $db_name = "social_media";
    
    $response = array();
    $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
    if (!$conn) {
        $response['success'] = false;
        $response['message'] = "Connection failed: " . mysqli_connect_error();
        echo json_encode($response); 
        exit(); 
    }
    
    $status=$_POST['status'];
    $id=$_SESSION['id'];
    
    $sql = "INSERT INTO statuses(status,user_id)
                VALUES('$status','$id')";
    
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        $response['success'] = false;
        $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo json_encode($response);
        exit();
    }
    //header("location:homepage.php");
    mysqli_close($conn);
?>
