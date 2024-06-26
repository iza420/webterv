<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Fluffy Stack Café</title>
  <link rel="stylesheet" type="text/css" href="css/index.css" />
  <script>
        function displayAlert() {
            var alertDiv = document.querySelector('.alert');
            alertDiv.style.display = 'flex';

            setTimeout(function() {
                alertDiv.style.opacity = '0';
                setTimeout(function() {
                    alertDiv.style.display = 'none';
                }, 500);
            }, 3000);
        }
  </script>
</head>

<body id="top">
<?php
if (isset($_GET['loginFailed']) && $_GET['loginFailed'] == true) {
    include 'alert.php';
    echo '<script>displayAlert();</script>';
}
?>


  <?php include 'navbar.php'; ?>
  <div class="adcontainer">
    <div class="leftside">
      <h2 class="ad">Your Favourite Waffles Delivered Hot & Fresh</h2>
      <p class="ad-description">
        Choose the healthy alternative to your guilty pleasure with our freshly
        made waffles
      </p>
      <a href="waffles.php" class="buttoncontainer">
        Order Now →
      </a>
    </div>
    <div class="rightside">
      <img src="resources/waffel.png" alt="waffle" />
    </div>
  </div>


  <div id="infocontainer">
    <div class="infobox">
      <p>Today</p>
      <p>10:00 am - 7:00 pm</p>
      <p>Working hours</p>
    </div>

    <div class="infobox">
      <p>Tisza Lajos krt. 103.</p>
      <p>Get Directions</p>
    </div>

    <div class="infobox" id="contactus">
      <p>+123-456-7890</p>
      <p>Call Online</p>
    </div>
  </div>

  <div id="aboutcontainer">
    <img src="resources/strwbrwffl.png" alt="" />
    <div id="about">
      <p class="coloredtext">About</p>
      <h3>Welcome to Fluffy Stack Café</h3>
      <p>
        Your number one source for all things waffles! We're dedicated to
        providing you the very best of waffles, with an emphasis on quality,
        taste, and customer service. Founded in 2024, Waffle Wonderland has
        come a long way from its beginnings in a small kitchen in Szeged,
        Hungary. When we first started out, our passion for perfect waffles
        drove us to start our own business. We now serve customers all over
        the world, and are thrilled that we're able to turn our passion into
        our own website. We hope you enjoy our products as much as we enjoy
        offering them to you. If you have any questions or comments, please
        don't hesitate to contact us. Sincerely, The Fluffy Stack Team
      </p>
      <a href="waffles.php" class="buttoncontainer">
        Waffles →
      </a>
    </div>
  </div>

  <div id="menucontainer">
    <div id="topcontainer">
      <a href="waffles.php" class="coloredtext">Menu</a>
      <h3>Explore Our Most Popular Waffles</h3>
    </div>
    <div id="wafflecontainer">
      <div class="waffle">
        <div class="imgdiv" id="imgdiv1"></div>
        <p>Berry Bliss Waffle</p>
        <p>
          Indulge in a symphony of flavors with our Berry Bliss Waffle. This
          delightful creation features a fluffy waffle base topped with a
          medley of fresh strawberries, blueberries, and raspberries.
        </p>
        <a class="add-button" href="waffles.php">
          <button type="submit">+</button>
        </a>
      </div>
      <div class="waffle">
        <div class="imgdiv" id="imgdiv2"></div>
        <p>Savory Sunrise Waffle</p>
        <p>
          Start your day right with our Savory Sunrise Waffle. This savory
          sensation combines a crispy waffle with layers of savory ham, melted
          cheddar cheese, and perfectly cooked scrambled eggs.
        </p>
        <a class="add-button" href="waffles.php">
          <button type="submit">+</button>
        </a>
      </div>
      <div class="waffle">
        <div class="imgdiv" id="imgdiv3"></div>
        <p>Cinnamon Swirl Delight Waffle</p>
        <p>
          Dive into a world of warmth and comfort with our Cinnamon Swirl
          Delight Waffle. This cozy creation features a fluffy waffle infused
          with cinnamon and vanilla, creating a perfect balance of sweet and
          spice.
        </p>
        <a class="add-button" href="waffles.php">
          <button type="submit">+</button>
        </a>
      </div>
      <div class="waffle">
        <div class="imgdiv" id="imgdiv4"></div>

        <p>Nutty Banana Crunch Waffle</p>
        <p>
          Experience a crunchy, creamy, and utterly delicious sensation with
          our Nutty Banana Crunch Waffle. This mouthwatering masterpiece
          begins with a golden waffle base topped with sliced bananas and a
          generous drizzle of creamy peanut butter.
        </p>
        <a class="add-button" href="waffles.php">
          <button type="submit">+</button>
        </a>
      </div>
      <div class="waffle">
        <div class="imgdiv" id="imgdiv5"></div>
        <p>S'mores Sensation Waffle</p>
        <p>
          Take your taste buds on a camping trip without leaving your kitchen
          with our S'mores Sensation Waffle. This indulgent creation features
          a fluffy waffle topped with gooey marshmallows, melted chocolate,
          and crushed graham crackers.
        </p>
        <a class="add-button" href="waffles.php">
          <button type="submit">+</button>
        </a>
      </div>
      <div class="waffle">
        <div class="imgdiv" id="imgdiv6"></div>
        <p>Veggie Waffle</p>
        <p>
          Embark on a culinary journey with our Mediterranean Veggie Waffle.
          This savory delight features a savory waffle infused with herbs and
          spices, topped with a colorful array of roasted vegetables including
          tomatoes, bell peppers, and zucchini.
        </p>
        <a class="add-button" href="waffles.php">
          <button type="submit">+</button>
        </a>
      </div>
    </div>
  </div>
  <a href="#top" id="toparrowcontainer"> ↑ </a>
  <?php include 'footer.php'; ?>
</body>

</html>