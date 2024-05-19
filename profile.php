<?php 
   session_start();

   include("PHP/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./style/nav.css">
    <link rel="stylesheet" href="./style/footer.css">
    <link rel="stylesheet" href="./style/profile.css">
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
</head>
<body>
    <header>
        <img class="back" src="./images/profile.png" alt="">
        <nav>
            <div class="logo">
                <a href="./index.php"> <img src="./images/res_Logo.jpg" alt="logo"></a>
            </div>

            <div class="nav_bar">
                <ul>
                <li ><a href="./booking.php">Booking</a></li>
                <li ><a href="./menu.php">Menu</a></li>
                <li ><a href="./about_us.php">About US</a></li>
                <li ><a href="./contact.php">Contact</a></li>
                <li class="sign_up"></li>
                </ul>

                <div class="sign_Up_btn">
                <?php 
                    $id = $_SESSION['id'];
                    $query = mysqli_query($con,"SELECT*FROM customer WHERE CID=$id");

                    while($result = mysqli_fetch_assoc($query)){
                        $res_Uname = $result['username'];
                        $res_id = $result['CID'];
                        $res_email = $result['email'];
                        $res_mobile = $result['mobileNumber'];
                    }

                    echo "<a class='btn' href='profile.php?Id=$res_id'>$res_Uname</a>"; 
                ?>
                </div>
            </div>
        </nav>
        
        <div class="user">
            <div>
                <p>ID: <?php echo $res_id ?></p>
                <p>NAME: <?php echo $res_Uname ?></p>
                <p>EMAIL: <?php echo $res_email ?></p>
                <p>MOBILE NUMBER: <?php echo $res_mobile ?></p>
            </div>
            
            <div class="logOut"><a href="php/logout.php"> <button class="btn">Log Out</button> </a></div>
        </div>

        
    </header>

    <section>
        <div class="title">
            <h1>Book List</h1>
        </div>
            <?php
                include("PHP/config.php");
                $sql = "SELECT *
                        FROM booking, types_table
                        WHERE CID = $id
                        AND booking.TID = types_table.TID";
                $result = mysqli_query($con, $sql);
            
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<div class='list'>";

                        echo "<div>";
                        echo "<h3>Booking number: ". $row['BID']."</h3>";
                        echo "<h3>Data: " . $row['date'] . "</h3>";
                        echo "<h3>Time: " . $row['time'] . "</h3>";
                        echo "<h3>Number of People: " . $row['NumOfP'] . "</h3>";
                        echo "<h3>Table Type: " . $row['type'] . "</h3>";
                        echo "</div>";
                        echo "</div>";
                    };
                }
            ?>
        

            ]
    </section>

   

    <footer>
        <div class="upper">
            <div class="upper1">
                <h4>WELCOME TO RESTAURANT</h4>
                <P>RESTAURANT, founded in 2022, is dedicated to all those who love to wander far and wide.</P>
                <br>
                <p>We'd like to invite you on a culinary adventure, where you’ll explore undiscovered gourmet experiences</p>
            </div>
            <div class="upper1">
                <h4>Visit</h4>
                <P> 📌317 Pacific C Hwy</P>
                <p>Huntington, CA 92648</p>

                <h4>Talk</h4>
                <p> 123.456-7</p>

                <h4>Write</h4>
                <p>✉️ eat@soulkitchen.com</p>
            </div>
            <div class="upper1">
                <h4>Reservations</h4>
                <a href="./booking.php">book your table</a>
                <br>
                <h4>Hours</h4>

                <p>MONDAY thru FRIDAY</p>
                <p>11am - 9pm</p>
                <br>
                <p>SATURDAY/SUNDAY</p>
                <p>10am - 11pm</p>

            </div>
            <div class="upper1">
                <h4>About</h4>
                <p>FAQ</p>
                <p>Reservation Policy</p>
                <p>Privacy Policy</p>
                <p>Health & Safety</p>

                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="lower">
            <p class="p1">© 2024 RESTURANT. All Rights Reserved.</p>
            <h3>RESTAURANT</h3>
            <p class="p2">taste the difference</p>
        </div>
    </footer>
</body>
</html>