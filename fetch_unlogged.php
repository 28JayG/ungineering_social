<?php
    session_start();
    $hostname="localhost";
    $username="root";
    $password="123456";
    $db_name="social_media";
    $conn = mysqli_connect($hostname, $username, $db_password, $database);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM statuses";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    } 
    
    while ($row=mysqli_fetch_array($result)) { 
        echo $row['status'];
    }    	
    
    mysqli_close($conn);
           
?>
