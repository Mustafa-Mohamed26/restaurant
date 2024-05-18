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
    <title>Contact</title>
    <link rel="stylesheet" href="./style/nav.css">
    <link rel="stylesheet" href="./style/footer.css">
    <link rel="stylesheet" href="./style/contact.css">
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
</head>
<body>
    <header>
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
    </header>

    <section >
        <div class="content">
            <h3>Find Us</h3>
            <p>WHERE</p>
            <div class="day bot">
                <p>317 Pacific C HwyHuntington <br> CA 92648</p>
            </div>

            <a href="./booking.php" class="button">book a table</a>

            <p class="par">WHEN</p>

            <div class="day">
                <p>Monday – Friday</p>
                <p>7am – 6pm</p>
            </div>

            <div class="day">
                <p>Saturday/Sunday</p>
                <p>8am – 6pm</p>
            </div>
        </div>

        <div class="photo"><img src="./images/table.png" alt=""></div>
    </section>

    <section >
        <div class="photo"><img src="./images/rest.jpg" alt=""></div>

        <div class="Container">
            <div class="content">
                <h3>Enquiries</h3>
                <p>PR & MARKETING ENQUIRIES</p>
                <div class="day">
                    <p>Milo @ 0100 234 567</p>
                </div>

                <p>CATERING ENQUIRIES</p>
                <div class="day">
                    <p>Jennifer @ 0100 234 577</p>
                </div>

                <p>RESERVATIONS & PRIVATE DINING</p>
                <div class="day">
                    <p>Gwyn @ 0100 234 173</p>
                </div>
            </div>
        </div>
    </section>
    <section >
        <div class="Container">
            <div class="content">
                <form class="contact">
                    <h3>Get in touch</h3>
                    <p>To get in touch fill out the contact form below or call us at 123.456-7.</p>
    
                    <input type="text" name="username" placeholder="USER NAME"><br>
                    <input type="text" name="email" placeholder="EMAIL"><br>
                    <input type="text" name="Phone_Number" placeholder="MOBILE"><br>
                    <textarea name="message" ></textarea><br>
                    <input type="submit" value="SEND" class="button">
                </form>
            </div>
        </div>

        <div class="photo"><img src="./images/rest2.png" alt=""></div>

    </section>

    <section class="icons">
        <div>
            <img src="./images/calander.png" alt="">
            <h5>Reservations</h5>
            <p>Are highly recommended</p>
        </div>

        <div>
            <img src="./images/car.png" alt="">
            <h5>Parking</h5>
            <p>Valet Parking is available</p>
        </div>

        <div>
            <img src="./images/peaple.png" alt="">
            <h5>Dress Attire</h5>
            <p>Smart casual</p>
        </div>

        <div>
            <img src="./images/tree.png" alt="">
            <h5>Vegetarian</h5>
            <p>Vegetarian on request</p>
        </div>
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