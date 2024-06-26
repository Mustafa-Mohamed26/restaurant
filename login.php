<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./style/nav.css">
    <link rel="stylesheet" href="./style/footer.css">
    <link rel="stylesheet" href="./style/SignUp.css">
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
                    <a class="btn" href="./sign_up.php">Sign Up</a>
                </div>
            </div>
        </nav>
    </header>

    <section>

        <div class="box">

            <div class="left">
                
                <div class="body">
                    <div class="photo">
                        <img src="./images/res_Logo.jpg" alt="">
                    </div>
                    
                    <div class="content">
                        <h2>Keep it special</h2>
                        <br>
                        <p>Welcome ,where culinary delights await! Sign up now to unlock a world of savory sensations and delectable experiences.</p>
                    </div>
                    <br><br><br><br>

                    <div class="social-links s2">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="formContainer jus">
                    <?php 
                    
                        include("./PHP/config.php");
                        if(isset($_POST['submit'])){
                            $email = mysqli_real_escape_string($con,$_POST['email']);
                            $password = mysqli_real_escape_string($con,$_POST['password']);

                            $result = mysqli_query($con,"SELECT * FROM customer WHERE email='$email' AND password='$password' ") or die("Select Error");
                            $row = mysqli_fetch_assoc($result);

                            if(is_array($row) && !empty($row)){
                                $_SESSION['valid'] = $row['email'];
                                $_SESSION['username'] = $row['username'];
                                $_SESSION['mobile'] = $row['mobileNumber'];
                                $_SESSION['id'] = $row['CID'];
                            }else{
                                echo "<div class='message'>
                                    <p>Wrong email or Password</p>
                                    </div> <br>";
                                echo "<a href='login.php'><button class='btn'>Go Back</button>";
                        
                            }
                            if(isset($_SESSION['valid'])){
                                header("Location: index.php");
                            }
                        }else{
                    ?>
                    <h2>Login</h2>
                    <form id="form" action="" method="Post">
        
                        <div class="inputContainer">
                            <input type="text" placeholder="Email" id="email" name="email">
                            <span class="error-message" id="emailError"></span>
                        </div>
        
                        <div class="inputContainer">
                            <input type="password" placeholder="Password" id="password" name="password">
                            <span class="error-message" id="errorPassword1"></span>
                        </div>
                        <button type="submit" name="submit" id="submit-btn">Sign Up</button>
                        <div class="links">
                            <a href="./sign_up.php">make a new account? </a>
                        </div>
                    </form>
                </div>
                <?php } ?>
            </div>

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