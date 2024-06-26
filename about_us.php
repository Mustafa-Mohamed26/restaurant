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
    <link rel="stylesheet" href="./style/about.css">
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

    <section>
        <div class="content">
            <p>Our daily changing menu represents the best of what our local markets have to offer. Our
                passion for sourcing fresh ingredients from farmers and suppliers we know, combining with
                traditional flavors and rewriting familiar recipes into exceptional cuisine is our mission and
                greatest joy.</p>
        </div>

        <div class="photo">
            <img src="./images/Vegan dumplings 1.png" alt="">
            <div class="about">
                <p>About Us</p>
            </div>
        </div>
    </section>
    <section >
        <div class="photo"><img src="./images/girl.png" alt=""></div>

        <div class="Container">
            <div class="rotate">
                <p>meet the team</p>
            </div>

            <div class="content">
                <h1>Chef Mila Kim</h1>
                <p>Zesty tofu pad thai ginger lemongrass agave green tea cocoa ginger carrot spiced juice
                    grains Thai basil curry golden cayenne pepper cool spring mocha chocolate blueberry
                    pops raspberries ultimate Thai super chili cauliflower lemon.</p><br>
                <p>Thai dragon pepper coconut rice Indian spiced apples cilantro springtime strawberry
                    sleepy morning tea double dark chocolate casserole cauliflower hearty burritos green
                    pepper miso dressing leek cilantro lime vinaigrette delightful blueberry scones main
                    course roasted butternut squash mocha chocolate ginger carrot spiced juice falafel bites
                    crumbled lentils pumpkin sriracha pecans.</p>
            </div>
        </div>
    </section>
    <section >
        <div class="Container">

            <div class="rotate">
                <p>Elemental cooking methods</p>
            </div>

            <div class="content">
                <h1>Food Philosophy</h1>
                <p>Zesty tofu pad thai ginger lemongrass agave green tea cocoa ginger carrot spiced juice
                    grains Thai basil curry golden cayenne pepper cool spring mocha chocolate blueberry
                    pops raspberries ultimate Thai super chili cauliflower lemon.</p><br>
                <p>Thai dragon pepper coconut rice Indian spiced apples cilantro springtime strawberry
                    sleepy morning tea double dark chocolate casserole cauliflower hearty burritos green
                    pepper miso dressing leek cilantro lime vinaigrette delightful blueberry scones main
                    course roasted butternut squash mocha chocolate ginger carrot spiced juice falafel bites
                    crumbled lentils pumpkin sriracha pecans.</p>
            </div>
        </div>

        <div class="photo"><img src="./images/floar.png" alt=""></div>

    </section>
    <section >
        <div class="photo"><img src="./images/Chiile rice paper chips 1.png" alt=""></div>
        <div class="Container">
            
            <div class="rotate">
                <p>taste the difference</p>
            </div>

            <div class="content">
                <h1>The Taste of Asia</h1>
                <p>Zesty tofu pad thai ginger lemongrass agave green tea cocoa ginger carrot spiced juice
                    grains Thai basil curry golden cayenne pepper cool spring mocha chocolate blueberry
                    pops raspberries ultimate Thai super chili cauliflower lemon.</p><br>
                <p>Thai dragon pepper coconut rice Indian spiced apples cilantro springtime strawberry
                    sleepy morning tea double dark chocolate casserole cauliflower hearty burritos green
                    pepper miso dressing leek cilantro lime vinaigrette delightful blueberry scones main
                    course roasted butternut squash mocha chocolate ginger carrot spiced juice falafel bites
                    crumbled lentils pumpkin sriracha pecans.</p>
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