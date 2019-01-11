<?php
session_start();
?>
<html>
    <head>
        <title>Dashboard</title>
        <link rel="shortcut icon" type="image/x-icon" href="img/95146958-chat-speech-icon-e-commerce-sign-graph-symbol-for-your-web-site-design-logo-app-ui-vector-illustrati.jpg" />
        <link rel="stylesheet" href="css/dashboard.css">
    </head>
    <body>
        <div class="dashboard_wrapper">
            <div class="header">
                <div class="logo">
                    <a href="homepage.php"><img src="img/img.jpg" alt="Sample Image" class="img"/></a>
                </div>
                <div class="a">
                    <div class="a1">
                        <p class="ungineering"><span class="p1">un</span>gineering</p>
                    </div>
                    <div class="a2">
                        <p class="bit">A <span class="p1">bit</span> of knowledge is good.</p>
                    </div>
                    <div class="a3">
                        <p class="byte">A <span class="p1">byte</span> is better.</p>
                    </div>
                </div>
                <div class="dashboard">
                    My Dashboard
                </div>
                <div class="logout">
                    <a href="logout.php"><button id="logout">Logout</button></a>
                </div>
            </div>
            <?php
            if (!isset($_SESSION['id'])) {
                ?>
                <div>
                    <p>Page restricted - User not logged in.</p>
                    <a href="login_form.php">Click here</a> to login    
                </div>    

                <?php
            } else {
                $id = $_SESSION['id'];
                $hostname = "localhost";
                $username = "root";
                $db_password = "123456";
                $db_name = "social_media";

                $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
                if (!$conn) {
                    die("Connection failed:" . mysqli_connect_error());
                }

                $sql = "SELECT * FROM users WHERE id = $id";

                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    die("Error: " . $sql . "<br>" . mysqli_error($conn));
                }
                $row = mysqli_fetch_array($result);
                ?>

                <div class="account_post">
                    <div class="account_details">
                        <form method="post" action="dashboard_submit.php" id="dashboard" >
                            <div class="account_heading">
                                <h1>My Account Details</h1>
                            </div>
                            <div class="name_detail">
                                <div class="name">Name
                                </div>    
                                <div class="name_text">
                                    <input type="text" class="name1" name="name" value="<?php echo $row['name']; ?>"/>
                                </div>
                            </div>
                            <div class="email_detail">
                                <div class="email">Email
                                </div>
                                <div class="email_text">
                                    <input type="text" class="email1" name="email" value="<?php echo $row['email']; ?>"/>
                                </div>
                            </div>
                            <div class="password_detail">
                                <div class="password">Password
                                </div>
                                <div class="password_text">
                                    <input type="password" class="password1" name="password" value="<?php echo $row['password']; ?>"/>
                                </div>
                            </div>
                            <div class="college_detail">
                                <div class="college">College
                                </div>
                                <div class="college_text">
                                    <input type="text" class="college1" name="college" value="<?php echo $row['college']; ?>"/>
                                </div>
                            </div>
                            <div class="phone_detail">
                                <div class="phone">Phone Number
                                </div>
                                <div class="phone_text">
                                    <input type="text" class="phone1" name="phone_number" value="<?php echo $row['phone_no']; ?>"/>
                                    <?php
                                    mysqli_close($conn);
                                    ?>
                                </div>
                            </div>
                            <div class="update">
                                <input type="submit" name="update" class="update_dashboard" value="Update"/>
                            </div>
                        </form>
                    </div>
                    <div class="my_post">
                        <h1 id="post">My Post</h1>
                        <?php
                        $user_id = $_SESSION['id'];

                        $hostname = "localhost";
                        $username = "root";
                        $db_password = "123456";
                        $db_name = "social_media";

                        $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
                        if (!$conn) {
                            die("Connection failed:" . mysqli_connect_error());
                        }

                        $sql = "select * from statuses WHERE user_id = $user_id";
                        $result = mysqli_query($conn, $sql);
                        if (!$result) {
                            die("Error: " . $sql . "<br>" . mysqli_error($conn));
                        }

                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <div class="status1">
                                <p class="date_time"><?php echo $row['date_time'] ?></p>
                                <p class="status"><?php echo $row['status'] ?></p>
                            </div>
                            <?php
                        }
                        mysqli_close($conn);
                        ?> 
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="bottom_margin">
            </div>
        </div>
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/dashboard.js"></script>
    </body>
</html>


