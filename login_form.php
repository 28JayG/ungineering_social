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
        //echo $pname;
        
        $_SESSION['id']=$row['id'];
        $_SESSION['name']=$row['name'];
    }
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Login Form</title>
        <link rel="stylesheet" href="css/login_style.css"/>
    </head>
    <body>
        <div class="container">
            <div class="div1">
                <div class="div11">
                    <div class="updiv">
                        <img src="Image/95146958-chat-speech-icon-e-commerce-sign-graph-symbol-for-your-web-site-design-logo-app-ui-vector-illustrati.jpg" alt="Status" class="image"/>
                    </div>
                </div>
                <div class="div12">
                    <p class="p">
                        <b>Existing User<br/> Log-in <br/></b>
                    </p>
                    <a class="log1" href="http://127.0.0.1/social_media/register_form.php">New User Create Account</a>
                </div>
                <div class="lastdiv">   </div>
            </div>
            <form method="post" class="div2" action="dashboard.php">
                <div class="div21">

                </div>
                <div class="div221">
                    <p1>
                        <b>Log-in</b>
                    </p1>
                </div>
                <div class="div22">
                    <div class="divx1">
                        Email
                    </div>
                    <div class="divx2">
                        <input type="email" name="email"/>
                    </div>
                </div>
                <div class="div22">
                    <div class="divx1">
                        Password
                    </div>
                    <div class="divx2">
                        <input type="password" id="pass" name="password"/>
                    </div>
                </div>

                <div class="div22">
                    <input style="color:white" type="submit" id="submit" class="sub" name="submit" value="Log-in"/>
                </div>
                <div class="div23">
                    <a class="log" href="http://127.0.0.1/social_media/register_form.php">New User Create Account</a>
                </div>
                <div class="div22">
                    <div class="divx1">
                        
                    </div>
                    <div class="divx2">
                        
                    </div>
                </div>
                <div class="div22">
                    <div class="divx1">
                        
                    </div>
                    <div class="divx2">
                        
                    </div>
                </div>
                <div class="lastdiv">   </div>
            </form>
        </div>
        <!--<script type="text/javascript" src="js/login_form.js">    </script>-->
    </body>
</html>
