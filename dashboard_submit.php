<?php

session_start();
$user_id = $_SESSION['id'];

$hostname = "localhost";
$username = "root";
$db_password = "ravishankar";
$db_name = "social_media";

$conn = mysqli_connect($hostname, $username, $db_password, $db_name);
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$college = $_POST['college'];
$phone_no = $_POST['phone_number'];

if (isset($user_id)) {
    $sql1 = "update users
            set
                name = '$name',
                email = '$email',
                password = '$password',
                college = '$college',
                phone_no = '$phone_no'
            where
                id = $user_id";
    if (!mysqli_query($conn, $sql1)) {
        die("Error:" . $sql1 . "<br/>" . mysqli_error($conn));
    }
    echo "Update Successful";
}
mysqli_close($conn);
?>
