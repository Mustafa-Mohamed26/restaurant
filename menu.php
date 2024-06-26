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
    <title>Menu</title>
    <link rel="stylesheet" href="./style/nav.css">
    <link rel="stylesheet" href="./style/footer.css">
    <link rel="stylesheet" href="./style/menu.css">
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
    <div class="title">
      <h1>Menu Block Examples</h1>
      <p>Find below a few menu block examples. </p>
      <p>Customize colors, typography, column width and much more.</p>
    </div>
  </header>
  

  <section>
    <div class="left">

      <div class="border">

        <h2>Lunch Menu</h2>
        <p>11:30 am – 3:00 pm</p>

        <div class="menu">

          <div class="item">
            <p class="name">Blackened Fish Sandwich </p>
            <p class="details">Crunchy cabbage, wild baby arugula,
              tomato, house made tartar sauce, on a
              brioche bun</p>
            <p class="price">9</p>
          </div>

          <div class="item">
            <p class="name">Chili & pepper spiced duck </p>
            <p class="details">Green beans, shiitakes, broccoli, carrots,
              plum & ginger dressing</p>
            <p class="price">26</p>
          </div>

          <div class="item">
            <p class="name">Lobster Tacos</p>
            <p class="details">Mango Salsa, Yuzu Guacamole</p>
            <p class="price">18</p>
          </div>

          <div class="item">
            <p class="name">Free-Range Chicken Breast</p>
            <p class="details">Ichimi glaze, shishito potato mash, green
              onion, garlic</p>
            <p class="price">16</p>
          </div>

          <div class="item">
            <p class="name">Wagyu ribeye teppanyaki</p>
            <p class="details">Snow peas, shimeji mushrooms</p>
            <p class="price">28</p>
          </div>

          <div class="item">
            <p class="name">Hanoi Style Whole Market Fish</p>
            <p class="details">Whole fish, sweet chilli sauce, Vietnamese
              herbs and spices, roasted cashews</p>
            <p class="price">22</p>
          </div>

        </div>
      </div>

      <div class="non-border">
        <h2>Small Bites</h2>
        <p class="small-bites-p">Order for the table and spread the love.</p>

        <div class="item">
          <p class="name">Green papaya salad </p>
          <p class="details">shrimp, chili & lime</p>
          <p class="price">12</p>
        </div>

        <div class="item">
          <p class="name">Black pepper calamari</p>
          <p class="details">Galangal dressing, roasted rice, thai basil</p>
          <p class="price">14</p>
        </div>

        <div class="item">
          <p class="name">Tumeric spiced cauliflower</p>
          <p class="details">Sesame tofu dressing, furikake</p>
          <p class="price">11</p>
        </div>

        <div class="item">
          <p class="name">Kingfish sashimi</p>
          <p class="details">Green nam jim, coconut & thai basil</p>
          <p class="price">15</p>
        </div>

        <div class="item">
          <p class="name">Caramelised betel leaf </p>
          <p class="details">Pineapple, Chili</p>
          <p class="price">12</p>
        </div>

        <div class="item">
          <p class="name">Pacific oysters (price per piece)</p>
          <p class="details">Ponzu, sriracha</p>
          <p class="price">5</p>
        </div>

        <div class="item">
          <p class="name">Thai chicken lettuce cups</p>
          <p class="details">Chilis, thai basil, crispy garlic, fried egg</p>
          <p class="price">13</p>
        </div>

        <div class="item">
          <p class="name">Shishito Peppers</p>
          <p class="details">Yuzu, sesame</p>
          <p class="price">9</p>
        </div>

        <div class="item">
          <p class="name">Edamame</p>
          <p class="details">maldon sea salt</p>
          <p class="price">8</p>
        </div>

      </div>

      <div class="non-border">
        <h2>Sides</h2>
       
        <div class="item">
          <p class="name">Asian green stir fry</p>
          <p class="details">Pea shoots, chinese broccoli leaves</p>
          <p class="price">7</p>
        </div>

        <div class="item">
          <p class="name">Chinese broccoli</p>
          <p class="details">Black bean sauce</p>
          <p class="price">7</p>
        </div>

        <div class="item">
          <p class="name">Spicy eggplant </p>
          <p class="details">Togarashi yogurt, curry, soybean chili</p>
          <p class="price"></p>
        </div>

        <div class="item">
          <p class="name">Coconut rice</p>
          <p class="price">5</p>
        </div>

        <div class="item">
          <p class="name">Steamed fragrant rice</p>
          <p class="price">4</p>
        </div>

      </div>

    </div>

    <div class="right">

      <div class="non-border">
        <h2>Main Course</h2>
       
        <div class="item">
          <p class="name">Sesame Chicken</p>
          <p class="details">Chinese eggplant, sweet chili soy glaze, green onion, pineapple, ginger</p>
          <p class="price">18</p>
        </div>

        <div class="item">
          <p class="name">Crispy Orange Chicken</p>
          <p class="details">Steamed bok choy</p>
          <p class="price">24</p>
        </div>

        <div class="item">
          <p class="name">Chicken Wings </p>
          <p class="details">Thai basil, chili, peanuts, green papaya, cilantro</p>
          <p class="price">22</p>
        </div>

        <div class="item">
          <p class="name">Ribeye Bites Roasted</p>
          <p class="details">Shishito Peppers, Jalapeño Crème</p>
          <p class="price">23</p>
        </div>

        <div class="item">
          <p class="name">Blackened Fish Sandwich </p>
          <p class="details">Crunchy cabbage, wild baby arugula, tomato, house made tartar sauce, on a brioche bun</p>
          <p class="price">9</p>
        </div>

        <div class="item">
          <p class="name">Black Pepper Chili Chicken</p>
          <p class="details">Pepper, onion, bamboo shoot, celery</p>
          <p class="price">14</p>
        </div>

        <div class="item">
          <p class="name">Stir fried Eggplant </p>
          <p class="details">Chinese eggplant, sweet chili soy glaze, green onion, garlic</p>
          <p class="price">12</p>
        </div>

        <div class="item">
          <p class="name">Crispy Pork Bun</p>
          <p class="details">House made kimchi, sriracha mayo</p>
          <p class="price">12</p>
        </div>

        <div class="item">
          <p class="name">Chili & pepper spiced duck </p>
          <p class="details">Green beans, shiitakes, broccoli, carrots, plum & ginger dressing</p>
          <p class="price">26</p>
        </div>

        <div class="item">
          <p class="name">Free-Range Chicken Breast</p>
          <p class="details">Ichimi glaze, shishito potato mash, green onion, garlic</p>
          <p class="price">16</p>
        </div>

        <div class="item">
          <p class="name">Hanoi Style Whole Market Fish</p>
          <p class="details">Whole fish, sweet chilli sauce, Vietnamese herbs and spices, roasted cashews</p>
          <p class="price">22</p>
        </div>

        <div class="item">
          <p class="name">Blackened Snapper</p>
          <p class="details">Steamed bok choy, ginger kaffir lime vinaigrette</p>
          <p class="price">24</p>
        </div>

        <div class="item">
          <p class="name">Honey Glazed Salmon</p>
          <p class="details">lotus root, green beans, baby sweet peppers</p>
          <p class="price">23</p>
        </div>

        <div class="item">
          <p class="name">Grilled Pork Chop</p>
          <p class="details">Vietnamese slaw, cashew & shrimp sambal</p>
          <p class="price">28</p>
        </div>

      </div>

      <div class="border">

        <h2>Desserts</h2>

        <div class="menu">

          <div class="item">
            <p class="name">Lavender scented pancakes</p>
            <p class="details">Bananas, raspberries, vanilla butter,
              shaved coconut, mint</p>
            <p class="price">9</p>
          </div>

          <div class="item">
            <p class="name">Dessert platter</p>
            <p class="details">Chef’s selection of sweets.
              Serves 2</p>
            <p class="price">19</p>
          </div>

          <div class="item">
            <p class="name">Fruit Plate</p>
            <p class="details">Seasonal selections of fruits, shaved
              coconut, vanilla drizzle, mint</p>
            <p class="price">14</p>
          </div>

          <div class="item">
            <p class="name">Fried Banana</p>
            <p class="details">Panko crusted with caramel sauce,
              banana brulee, caramel popcorn</p>
            <p class="price">9</p>
          </div>

          <div class="item">
            <p class="name">Sorbet</p>
            <p class="details">Watermelon, passion fruit, strawberry,
              mango, orange</p>
            <p class="price">7</p>
          </div>

          <div class="item">
            <p class="name">Thai Donut</p>
            <p class="details">Fried donut dipped with sweet condense
              milk & peanut</p>
            <p class="price">8</p>
          </div>

          <div class="item">
            <p class="name">Banana spring rolls</p>
            <p class="details">Honey glaze, vanilla drizzle, coconut-
              pineapple ice cream</p>
            <p class="price">7</p>
          </div>

          <div class="item">
            <p class="name">Mochi Ice Cream</p>
            <p class="details">Mango, Salted Caramel, Lychee,
              Chocolate, Strawberry</p>
            <p class="price">8</p>
          </div>

        </div>
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