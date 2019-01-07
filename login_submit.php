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
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }

    if ($row=mysqli_fetch_array($result)) {
        $pname=$row['name'];
        $_SESSION['id']=$row['id'];
        $_SESSION['name']=$row['name'];

        echo $_SESSION['id'];
        header('location:homepage.php');
    }
    mysqli_close($conn);

?>
