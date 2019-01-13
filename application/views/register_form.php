<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
    <head>
        <title>Register Form</title>
        <link rel="stylesheet" href="/social_media/static/css/style.css"/>
        <link rel="shortcut icon" type="image/x-icon" href="/social_media/static/img/95146958-chat-speech-icon-e-commerce-sign-graph-symbol-for-your-web-site-design-logo-app-ui-vector-illustrati.jpg" />
    </head>
    <body>
        <div class="container">
            <div class="div11">
                <div class="div1">
                    <div class="updiv">
                        <a href="/social_media/index.php/home/home">
                            <img src="/social_media/static/img/95146958-chat-speech-icon-e-commerce-sign-graph-symbol-for-your-web-site-design-logo-app-ui-vector-illustrati.jpg" alt="Status" class="image"/>
                        </a>
                    </div>
                </div>
                <div class="div2">

                </div>
            </div>
            <div class="div12">
                <div class="div1">
                    <p class="p">
                        <b>New User<br/> Create <br/>Account<br/></b>
                    </p>
                    <a class="log1" href="/social_media/index.php/login/login_form">Existing User Log-In</a>
                </div>  
                <form method="post" class="div2" onsubmit="return validation()" id="registration_form" action="/social_media/index.php/login/register_submit">
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
                            <input type="text" id ="name" class="input" name="name" />
                            <span id="sname" ></span>
                        </div>
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
                    <div class="div22">
                        <div class="divx1">
                            Password
                        </div>
                        <div class="divx2">
                            <input type="password" id="conpass" class="input" name="conf_pass"/>
                            <span id="sconf" ></span>
                        </div>
                    </div>
                    <div class="div2222">
                        <input style="color:white" type="submit" id="submit" class="sub" name="submit" value="Create Account"/>
                    </div>
                    <div class="div23">
                        <a class="log" href="/social_media/index.php/login/login_form">Existing User Log-In</a>
                    </div>
                </form>
            </div>
            <div class="lastdiv">   </div>
        </div>
        <script type="text/javascript" src="/social_media/static/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="/social_media/static/js/register_form2.js"></script>
        <script type="text/javascript" src="/social_media/static/js/register_form3.js"></script>
    </body>
</html>

