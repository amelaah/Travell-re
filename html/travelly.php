<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travelly</title>

    <link rel="stylesheet" href="../css/travelly.css" />

    <!-- google font ------------------------------------------------------------------------------------------- -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- header - navbar ---------------------------------------------------------------------------------------- -->

    <header class="sticky">
      <div class="titulli">
        <a href="#" class="logo">travelly</a>
      </div>

      <ul class="navbar">
        <li><a href="#home">Home</a></li>
        <li><a href="#destination">Destination</a></li>
        <li><a href="#package">Packages</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="../html/book.php">Sign Up</a></li>

        <!-- sign out button -->

        
        <li>
          <form action="../php/signOut.php" method="POST" id="sign-out-button">
            <a href="">Sign Out</a> 
          </form>
        </li>
 
                       
      </ul>    

      <!-- toggle btn -->

      <div class="toggle_btn">
        <img src="../images/menu.php" alt="" />
      </div>

      <!-- responsive navbar -->

      <div class="dropdown_menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#destination">Destination</a></li>
        <li><a href="#package">Packages</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="book.php">Sign Up</a></li>
        <!-- njejt qitu posht me id per sign out -->
        <li>  
          <form action="../php/signOut.php" method="POST" id="sign-out-button">
            <a href="">Sign Out</a> 
          </form>
        </li>
      </div>
    </header>

    <!-- home ---------------------------------------------------------------------------------------------------- -->

    <section class="home" id="home">
      <div class="home-text">
        <h1>Travel With Us</h1>
        <h2>
          Your Gateway <br />
          to Unforgettable <br />
          Adventures
        </h2>
        <br />
        <a href="../html/book.php" class="home-btn"> Book now</a>
      </div>
    </section>

    <!-- destination ----------------------------------------------------------------------------------------------- -->

    <section class="destination" id="destination">
      <div class="text">
        <h2>Start Your Vacation with Lots of Services!</h2>
      </div>

      <div class="row-items">
        <a href="../html/flight.php">
          <div class="container-box">
            <div class="container-img">
              <img src="../images/plane.php" />
            </div>
            <h4>Flight Tour</h4>
            <p>150 Properties</p>
          </div>
        </a>

        <a href="../html/summer-vacation.php">
          <div class="container-box">
            <div class="container-img">
              <img src="../images/sun.php" />
            </div>
            <h4>Summer Rest</h4>
            <p>150 Properties</p>
          </div>
        </a>

        <a href="../html/food.php">
          <div class="container-box">
            <div class="container-img">
              <img src="../images/plate.php" />
            </div>
            <h4>Food Service</h4>
            <p>150 Properties</p>
          </div>
        </a>

        <a href="../html/mountain.php">
          <div class="container-box">
            <div class="container-img">
              <img src="../images/map (1).php" />
            </div>
            <h4>Mountains</h4>
            <p>150 Properties</p>
          </div>
        </a>
      </div>
    </section>

    <!-- package ------------------------------------------------------------------------------------------------- -->

    <section class="package" id="package">
      <div class="title">
        <h2>Our Upcoming Tour Packages</h2>
        <br />
      </div>

      <div class="package-content">
        <div class="box">
          <div class="idk">
            <img src="../images/paris.php" alt="" />
            <h3>$499</h3>
          </div>
          <div class="dest-content">
            <div class="location">
              <h4>Paris</h4>
              <p>3h - 4h</p>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="idk">
            <img src="../images/brasil.php" alt="" />
            <h3>$999</h3>
          </div>
          <div class="dest-content">
            <div class="location">
              <h4>Brazil</h4>
              <p>17h - 24h</p>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="idk">
            <img src="../images/rome.php" alt="" />
            <h3>$299</h3>
          </div>
          <div class="dest-content">
            <div class="location">
              <h4>Rome</h4>
              <p>1h - 2h</p>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="idk">
            <img src="../images/dubai.php" alt="" />
            <h3>$1499</h3>
          </div>
          <div class="dest-content">
            <div class="location">
              <h4>Dubai</h4>
              <p>7h - 8h</p>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="idk">
            <img src="../images/koln.php" alt="" />
            <h3>$299</h3>
          </div>
          <div class="dest-content">
            <div class="location">
              <h4>Köln</h4>
              <p>2h - 3h</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- about us ------------------------------------------------------------------------------------------------- -->

    <section class="about" id="about">
      <div class="about_main">
        <div class="about_title">
          <h2>Discover Who We Are</h2>
          <br />
          <h3>
            Turn Your Dreams
            <br />into a Reality
          </h3>
          <br />
          <p>
            "Discover Us - Founded in 2016 in the heart of Prishtina, Kosovo, by
            two passionate women <br />with a shared love for travel, our
            journey began with a dream: <br />To create a space where travel
            becomes more than just a trip, but an unforgettable experience.
            <br />What started as a humble idea quickly gained traction, and
            before we knew it, we were helping <br />travelers from our small
            city embark on unforgettable adventures.
          </p>
          <br />
          <p>
            At our core, we are dedicated to crafting experiences that are as
            unique as you are. <br />Whether it is a cozy weekend getaway to
            explore hidden gems close to home or a once-in-a-lifetime
            <br />journey to distant lands, we take the time to understand your
            personal travel style, ensuring <br />every detail is carefully
            tailored to your needs.
          </p>
          <br />
          <p>
            Our passion lies in sharing the beauty of the world with our clients
            and making travel dreams
            <br />a reality, one destination at a time. We pride ourselves on
            providing personalized service, <br />expert advice, and heartfelt
            recommendations to guide you on every step of your journey. No
            matter <br />where you want to go, we are here to craft the perfect
            adventure for you, filled with discovery, <br />excitement, and the
            joy of new experiences."
          </p>
        </div>
        <div class="about_foto">
          <img src="../images/id.php" alt="" />
        </div>
      </div>
    </section>

    <!-- javascript ------------------------------------------------------------------------------------------------ -->
    <script src="../script/travelly.js"></script>
  </body>
</html>
