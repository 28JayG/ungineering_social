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
            <form method="post" class="div2" onsubmit="return validation()" action="register_submit2.php">
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
                        <span id="sname" ></span>
                    </div>
                </div>
                <div class="div22">
                    <div class="divx1">
                        Email
                    </div>
                    <div class="divx2">
                        <input type="email" id ="email" name="email"/>
                        <span id="semail" ></span>
                    </div>
                </div>
                <div class="div22">
                    <div class="divx1">
                        Password
                    </div>
                    <div class="divx2">
                        <input type="password" id="pass" name="password"/>
                        <span id="spass" ></span>
                    </div>
                </div>
                <div class="div22">
                    <div class="divx1">
                        Password
                    </div>
                    <div class="divx2">
                        <input type="password" id="conpass" name="conf_pass"/>
                        <span id="sconf" ></span>
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
        <script type="text/javascript" src="js/register_form2.js">    </script>
        <!--<script type="text/javascript" src="js/register_form.js">    </script>-->
    </body>
</html>