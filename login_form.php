<?php
    session_start();
    if(isset($_SESSION['id'])){
        //header('location: homepage.php');
        ?>
        <html>
            <head>
                <title>Login Form</title>
                <link rel="stylesheet" href="css/already_logged_in.css"/>
            </head>
            <body>
                <p>You  are already logged-in</p><br/>
                <a id="anchor" class="log1" href="homepage.php"> Click here to go to home page</a>
            </body>
        </html>
        <?php
    } else{
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Login Form</title>
        <link rel="stylesheet" href="css/login_style.css"/>
    </head>
    <body>
        <div class="container">
            <div class="div11">
                <div class="div1">
                    <div class="updiv">
                        <a href="homepage.php">
                            <img src="Image/95146958-chat-speech-icon-e-commerce-sign-graph-symbol-for-your-web-site-design-logo-app-ui-vector-illustrati.jpg" alt="Status" class="image"/>
                        </a>
                    </div>
                </div>
                <div class="div2">
                    
                </div>
            </div>
            <div class="div12">
                <div class="div1">
                    <p class="p">
                        <b>Existing User<br/> Log-in <br/></b>
                    </p>
                    <a class="log1" href="register_form.php">New User Create Account</a>
                </div>  
                <form method="post" class="div2" id="login_form" action="login_submit.php" onsubmit="return validation()">
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
                        <input type="email" id ="email" class="input" name="email"/>
                        <span id="semail" ></span>
                    </div>
                </div>
                <div class="div22">
                    <div class="divx1">
                        Password
                    </div>
                    <div class="divx2">
                        <input type="password" id="pass" class="input" name="password"/>
                        <span id="spass" ></span>
                    </div>
                </div>
                
                <div class="div2222">
                    <input style="color:white" type="submit" id="submit" class="sub" name="submit" value="Log-in"/>
                </div>
                <div class="div23">
                    <a class="log" href="register_form.php">New User Create Account</a>
                </div>
                </form>
            </div>
            <div class="lastdiv">   </div>
        </div>
        <script type="text/javascript" src="js/jquery-3.3.1.min.js">  </script>
        <script type="text/javascript" src="js/login_form.js">        </script>
        <script type="text/javascript" src="js/login_form2.js">       </script>
        
    </body>
</html>
<?php
}