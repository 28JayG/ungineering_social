<!DOCTYPE html>
<?php
    session_start()
?>
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
            <form method="POST" action="login_form.php">
            <div class="a2">
                 <input type="submit" name="Login" value="Login" class="a21"/>
            </div>
            </form>
            <form method="POST" action="register_form.php">
            <div class="a3">
                <input type="submit" name="New user" value="New user" class="a21"/>
            </div>
            </form>
        </div>
        <div class="b">
            <?php
                if(isset($_SESSION['id'])){
                    //echo $_SESSION['id'];
                    ?>
                    <h1 class="h2">Write Something Here</h1>
                    <div class="b2">
                
                    </div>
                    <input type="submit"
                    <hr></hr><?php
                }
            ?>
            
        <?php
            $hostname = "localhost";
            $username = "root";
            $db_password = "123456";
            $database = "social_media";

            $conn = mysqli_connect($hostname, $username, $db_password, $database);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            //$sql = "SELECT * FROM statuses";
            $sql =  "SELECT 
                        statuses.status,statuses.date_time,users.name
                    FROM
                        statuses
                    INNER JOIN 
                        users
                    ON
                        statuses.user_id=users.id
                    ORDER BY 
                        statuses.date_time DESC";
            
            $result = mysqli_query($conn, $sql);
            if (!$result) {
                die("Error: " . $sql . "<br>" . mysqli_error($conn));
            }
            
            
            while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="b1">
                <p>
                    <h1 class="h1"><?php echo $row['name']; ?></h1>
                     <p><?php echo $row['status']; ?></p>
                    <p class="b11"><?php echo $row['date_time']?></p>
                
            
                </p>
            </div>    	
            <?php
            }
                mysqli_close($conn);
        ?>        
        </div>
    </body>
    //<script type="text/javascript" src="js/homepage.js"></script>
</html> 
