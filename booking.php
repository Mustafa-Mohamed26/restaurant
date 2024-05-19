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
    <title>Booking</title>
    <link rel="stylesheet" href="./style/nav.css">
    <link rel="stylesheet" href="./style/footer.css">
    <link rel="stylesheet" href="./style/b.css">
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
</head>
<body>
    <header>
        <img src="./images/booking photo.jpeg" alt="">
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
                        }

                        echo "<a class='btn' href='profile.php?Id=$res_id'>$res_Uname</a>"; 
                    ?>
                </div>
            </div>
        </nav>

        <div class="contant">
            <h2>Enjoy an unforgettable Experience</h2>
            <h1>Book your Table</h1>
        </div>
    </header>

    <section>
        <div class="times">
            <div class="title">
            <p>We will confirm your reservation within 24 hours via Email.</p>
            <h2>OPENING TIMES</h2>
            </div>

            <div class="day">
                <p>Monday – Friday</p>
                <p>7am – 6pm</p>
            </div>

            <div class="day">
                <p>Saturday/Sunday</p>
                <p>8am – 6pm</p>
            </div>
        </div>

        <?php
        include(".\PHP\config.php");
        if(isset($_POST['submit'])){
            
            $tableID = $_POST['tables'];
            $date = $_POST['date'];
            $time = $_POST['options'];
            $NumberOfPeople = $_POST['NumberOfPeople'];


            mysqli_query($con,"INSERT INTO booking (TID,CID, date, time, NumOfP)
                               VALUES ('$tableID','$id', '$date', '$time', '$NumberOfPeople')")
                               or die("Error Occurred");

            

            
        }
    ?>

        <form action="" method="post">

            <div class="list">
                <label for="tables" class="form-p"> Select Table Type</label><br>
                <?php
                    $sqlD = "SELECT TID, type FROM types_table";
                    $resultD = mysqli_query($con, $sqlD);

                    echo '<select name="tables">';

                    while ($rowD = mysqli_fetch_assoc($resultD)){
                        echo '<option value="' . $rowD['TID'] . '">' . $rowD['type'] . '</option>';
                    }
                    echo '</select>'; 
                ?>
            </div>

            <div class="list">
                <p class="form-p">Date</p>
                <input type="date" name="date">
            </div>
            <p class="form-p">Time</p>
            <div class="time">
                
                <div>
                    <input type="radio" id="option1" name="options" value="17:00">
                    <label for="option1">17:00 </label><br>
                </div>
                <div>
                    <input type="radio" id="option2" name="options" value="18:00">
                    <label for="option2">18:00 </label><br>
                </div>
                <div>
                    <input type="radio" id="option3" name="options" value="19:00">
                    <label for="option3">19:00 </label><br>
                </div>
                <div>
                    <input type="radio" id="option4" name="options" value="20:00">
                    <label for="option4">20:00 </label><br>
                </div>
                <div>
                    <input type="radio" id="option5" name="options" value="21:00">
                    <label for="option5">21:00 </label><br>
                </div>
                <div>
                    <input type="radio" id="option6" name="options" value="22:00">
                    <label for="option6">22:00 </label><br>
                </div>
            </div>

            <div class="list">
                <p class="form-p">Number of People</p>
                <input type="text" name="NumberOfPeople">
            </div>

            

            <input type="submit" name="submit" value="SEND" class="button">

        </form>

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
                      <a href="https://www.facebook.com/bibalexOfficial"><i class="fab fa-facebook-f"></i></a>
                      <a href="https://twitter.com/bibalexOfficial"><i class="fab fa-twitter"></i></a>
                      <a href="https://www.instagram.com/bibalexofficial/"><i class="fab fa-instagram"></i></a>
                      <a href="https://www.linkedin.com/company/bibalexofficial/"><i class="fab fa-linkedin-in"></i></a>
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