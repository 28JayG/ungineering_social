<!DOCTYPE html>
<?php
session_start()
?>
<html>
    <head>
        <title>HOMEPAGE</title>
        <link rel="shortcut icon" type="image/x-icon" href="/static/images/img.jpg"/>
        <link rel="stylesheet" href= "/static/css/homepage.css"/>
    </head>
    <body>
        <div class="header">
            <div class="section1">
                <div class="img">
                    <a href="/application/views/homepage.php"><img src="/static/images/img.jpg" alt="Sample Image" class="a111"/></a>
                </div>
                <div class="text">
                    <div class="text1">
                        <p class="p1"><span class="p2">un</span>gineering</p>
                    </div>
                    <div class="text2">
                        <p class="pa122">A <span class="p2">bit</span> of knowledge is good<br/>
                            &nbsp &nbsp &nbsp A <span class="p2">byte</span> is better</p>
                    </div>
                </div>
            </div>

            <div class="section2">
                <?php
                if (isset($_SESSION['id'])) {
                    ?>
                    <a href="dashboard.php"><button type="button" class="button1">Dashboard</button></a>
                    <?php
                } else {
                    ?>
                    <a href="/application/views/login_form.php"><button type="button" class="button1">Login</button></a>
                    <?php
                }
                ?>    
            </div>

            <div class="section3">
                <?php
                if (isset($_SESSION['id'])) {
                    ?>
                    <a href="logout.php"><button type="button" class="button2">Logout</button></a>
                    <?php
                } else {
                    ?>
                    <a href="register_form.php"><button type="button" class="button2">New User</button></a>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="footer">
            <?php
            if (isset($_SESSION['id'])) {
                ?>
                <h1 class="h2">Write Something Here</h1>

                <div class="put_status">
                    <form method="post" action="homepage_submit.php" id="status_form" >
                        <textarea  cols="94" name="status" id="text"></textarea>
                        <input type="submit" name="submit" value="SUBMIT" id="b21">
                    </form>
                </div>
                <hr></hr><?php
            }
            ?>

            <?php
            
            foreach($data as $row) {
                ?>
                <div class="get_status">
                    <p>
                        <h1 class="h1"><?php echo $row['name']; ?></h1>
                        <p><?php echo $row['status']; ?></p>
                        <p class="time"><?php echo $row['date_time'] ?></p>
                    </p>
                </div>    	
                <?php
            }
            ?>        
        </div>
    </body>

    <script type="text/javascript" src="/static/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/static/js/homepage.js"></script>
</html> 
