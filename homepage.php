<!DOCTYPE html>
<html>
    <head>
        <title>HOMEPAGE</title>
        <link rel="stylesheet" href= "css/homepage.css"/>
    </head>
    <body>
        <div class="a">
            <div class="a1">
                <div class="a11">
                    <img src="img/img.jpg" alt="Sample Image" class="a111"/>
                </div>
                <div class="a12">
                    <div class="a121">
                        <p class="p1"><span class="p2">un</span>gineering</p>
                    </div>
                    <div class="a122">
                        <p class="pa122">A <span class="p2">bit</span> of knowledge is good<br/>
                         &nbsp &nbsp &nbsp A <span class="p2">byte</span> is better</p>
                    </div>
                </div>
            </div>
            <div class="a2">
                 <input type="submit" name="Login" value="Login" class="a21"/>
            </div>
            <div class="a3">
                <input type="submit" name="New user" value="New user" class="a21"/>
            </div>
        </div>
        <div class="b">
        <?php
            $hostname = "localhost";
            $username = "root";
            $db_password = "123456";
            $database = "ungineering";

            $conn = mysqli_connect($hostname, $username, $db_password, $database);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM statuses";

            $result = mysqli_query($conn, $sql);
            if (!$result) {
                die("Error: " . $sql . "<br>" . mysqli_error($conn));
            }
            
            
            while ($row=mysqli_fetch_array($result)) {
            ?>
            <div class="b1">
                <p>
                    <h1 class="h1"><?php echo $row['name']; ?></h1>
                     <p><?php echo $row['status']; ?></p>
                    <p class="b11"><?php echo "Time:". echo $row['date_time'].echo "Hrs IST"?></p>
                
            }
                </p>
            </div>    	
            <?php
                mysqli_close($conn);
        ?>

        <!--<?php
            for($i=0;$i<7;$i++){
                ?>
            <div class="b1">
                <p>
                    <h1 class="h1">Name</h1>
                    <p>hello guys, this is my first status
                        … At the same time, every minute, 10 hours of content were uploaded to the video sharing platform
                        YouTube … According to Forrester Research, 75% of Internet surfers used “Social Media” in the
                        quarter of 2008 by joining social networks, reading blogs, or contributing …</p>
                    <p class="b11">Time:24:40 Hrs IST |26 Dec</p>
                </p>
            </div>
            <?php
            }
        ?>
        </div>-->
    </body>
    //<script type="text/javascript" src="js/homepage.js"></script>
</html> 
