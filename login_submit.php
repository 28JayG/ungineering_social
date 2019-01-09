<?php
    session_start();
    
    $hostname = "localhost";
    $username = "root";
    $db_password = "123456";
    $db_name = "social_media";
    
    $response = array();
    $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
    if (!$conn) {
        //die("Connection failed: " . mysqli_connect_error());
        $response['mode'] = 1;
        $response['success'] = false;
        $response['message'] = "Connection failed: " . mysqli_connect_error();
        echo json_encode($response);
        exit();
    }
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        //die("Error: " . $sql . "<br>" . mysqli_error($conn));
        $response['mode'] = 2;
        $response['success'] = false;
        $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo json_encode($response);
        exit();
    } else if ($row=mysqli_fetch_array($result)) {
        $_SESSION['id']=$row['id'];
        $_SESSION['name']=$row['name'];

        $response['success'] = true;
        $response['message'] = "Hello " . $row['name'];

        //header('location:dashboard.php');
    } else{
        $response['success'] = false;
        $response['mode'] = 3;
        //$response['message'] = "Login failed";
    }
    echo json_encode($response);
    mysqli_close($conn);

?>
