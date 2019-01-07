<?php
    
    ?><script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script><?php            

    $hostname="localhost";
    $username="root";
    $db_password="123456";
    $db_name="social_media";
    
    $conn=mysqli_connect($hostname,$username,$db_password,$db_name);
    if(!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];   
    $confpass=$_POST['conf_pass'];
    
    if($name!="" && $email!="" && $password!="" && $confpass!="" && $flag==0){
        $flag=1;

        $sql1 = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql1);
        
        if ($row=mysqli_fetch_array($result)) {
            $pemail=$row['email'];
            if($pemail==$email){
                die("This Email is Already Registered...</br>Please Enter Any Other Email...");
            }
        }
        elseif($confpass==$password){
            $sql="INSERT INTO users(name,email,password) VALUES ('$name','$email','$password')";
            if(!mysqli_query($conn,$sql)){
                die("Error:". $sql. "<br/>". mysqli_error($conn));
            }
            header('location: login_form.php');
        }    
        mysqli_close($conn);
    
    }