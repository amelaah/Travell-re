<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Flights</title>
   <link rel="stylesheet" href="../css/flight.css">
</head>
<body>
    <!-- navbar --------------------------------------------------------------------------------------------->
   <header class="sticky">
      <a href="../html/travelly.php" class="logo">travelly</a>
      <div class="bx bx-menu" id="menu-icon"></div>

      <ul class="navbar">
        <li><a href="travelly.php#home">Home</a></li>
        <li><a href="travelly.php#destination">Destination</a></li>
        <li><a href="travelly.php#package">Packages</a></li>
        <li><a href="travelly.php#about">About Us</a></li>
        <li><a href="../html/contact.php">Contact Us</a></li>
        <li><a href="../html/book.php">Sign Up</a></li>
      </ul>

      <!-- toggle btn -->
      <div class="toggle_btn">
         <img src="../images/menu.php" alt="" />
       </div>

       <!--responsive navbar -->
      <div class="dropdown_menu">
         <li><a href="travelly.php#home">Home</a></li>
        <li><a href="travelly.php#destination">Destination</a></li>
        <li><a href="travelly.php#package">Packages</a></li>
        <li><a href="travelly.php#about">About Us</a></li>
        <li><a href="../html/contact.php">Contact Us</a></li>
        <li><a href="../html/book.php">Sign Up</a></li>
      </div>
    </header>
    
    <!-- flights ---------------------------------------------------------------------------------------- -->
  <section class="flights" id="flights">
   <div class="title">
      <h2>Our most Thrilling Trips right now!</h2>
      <br>
   </div>
   <div class="flights-container">

      <!-- box1 ---------------------------------------------------------------------------------------->
      <div class="box1">
         <a href="../html/login.php">
            <div class="o-box1">
               <div class="foto">
                  <img src="../images/madrit.php" alt="">
                  <h3>$399</h3>
               </div>
               <div class="flights-content">
                  <div class="loc">
                     <h4>Madrid</h4>
                     <p>4h - 5h</p>
                  </div>
               </div>
            </div>
         </a>

         <a href="../html/login.php">
            <div class="o-box1">
               <div class="foto">
                  <img src="../images/maldive.php" alt="">
                  <h3>$1999</h3>
               </div>
               <div class="flights-content">
                  <div class="loc">
                     <h4>Maldives</h4>
                     <p>12h - 14h</p>
                  </div>
               </div>
            </div> 
         </a>
      </div>

<!-- box 2 ------------------------------------------------------------------------------------------->
      <div class="box2">

        <a href="../html/login.php">
         <div class="o-box1">
            <div class="foto">
               <img src="../images/cairo.php" alt="">
               <h3>$699</h3>
            </div>
            <div class="flights-content">
               <div class="loc">
                  <h4>Cairo</h4>
                  <p>7h - 8h</p>
               </div>
            </div>
         </div>
        </a>

         <a href="../html/login.php">
            <div class="o-box1">
               <div class="foto">
                  <img src="../images/hawai.php" alt="">
                  <h3>$2200</h3>
               </div>
               <div class="flights-content">
                  <div class="loc">
                     <h4>Hawaii</h4>
                     <p>19h - 23h</p>
                  </div>
               </div>
            </div>
         </a> 
      </div>
   </div>
  </section>
  <script src="../script/travelly.js"></script>
</body>
</html>