<?php
    
    ?><script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script><?php

    //$name=NULL;
    //$email=NULL;
    $password=NULL; 


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
    
    if($name!="" && $email!="" && $password!="" && $confpass!=""){
        if($confpass==$password){
            $sql="INSERT INTO users(name,email,password) VALUES ('$name','$email','$password')";
            if(!mysqli_query($conn,$sql)){
                die("Error:". $sql. "<br/>". mysqli_error($conn));
            }
            $password=NULL;
            $confpass=NULL;
        }    
        mysqli_close($conn);
    
    }
    //$sql1 = "SELECT * FROM users WHERE email='$email'";

    //$result = mysqli_query($conn, $sql1);
    
    //if (!$result) {
    //    die("Error: " . $sql1 . "<br>" . mysqli_error($conn));
    //}

    //if ($row=mysqli_fetch_array($result)) {
    //    echo $row['name'] . "<br/>";
        /*if($row['email']==$email){
            ?> 
                <script type="text/javascript" src="js/register_form.js">    </script>
            <?php

        }*/
    //}
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Register Form</title>
        <link rel="stylesheet" href="css/style.css"/>
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
                        <b>New User<br/> Create <br/>Account<br/></b>
                    </p>
                    <a class="log1" href="http://127.0.0.1/social_media/login_form.php">Existing User Log-In</a>
                </div>
                <div class="lastdiv">   </div>
            </div>
            <form method="post" class="div2">
                <div class="div21">
                    
                </div>
                <div class="div221">
                    <p1>
                        <b>Create Account</b>
                    </p1>
                </div>
                
                <div class="div22">
                    <div class="divx1">
                        Name
                    </div>
                    <div class="divx2">
                        <input type="text" id ="name" name="name" />
                    </div>
                </div>
                <div class="div22">
                    <div class="divx1">
                        Email
                    </div>
                    <div class="divx2">
                        <input type="email" id ="email" name="email"/>
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
                    <div class="divx1">
                        Password
                    </div>
                    <div class="divx2">
                        <input type="password" id="conpass" name="conf_pass"/>
                    </div>
                </div>
                
                <div class="div2222">
                    <input style="color:white" type="submit" id="submit" class="sub" name="submit" value="Create Account"/>
                </div>
                <div class="div23">
                    <a class="log" href="http://127.0.0.1/social_media/login_form.php">Existing User Log-In</a>
                </div>
            
                <div class="lastdiv">   </div>
            </form>
            </div>
        </div>
        <script type="text/javascript" src="js/register_form.js">    </script>
    </body>
</html>
