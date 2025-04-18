<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Now | Sign Up</title>
    <link rel="stylesheet" href="../css/book.css" />
  </head>
  <body>
    <!-- navbar --------------------------------------------------------------------------------------------->
    <header class="sticky">
      <a href="../html/travelly.php" class="logo">travelly</a>
      <div class="bx bx-menu" id="menu-icon"></div>

      <ul class="navbar">
        <li><a href="travelly.php#home">Home</a></li>
        <li><a href="travelly.php#destination">Destination</a></li>
        <li><a href="travelly.php#package">Package</a></li>
        <li><a href="travelly.php#about">About Us</a></li>
        <li><a href="../html/contact.php">Contact Us</a></li>
      </ul>

      <!-- toggle btn -->
      <div class="toggle_btn">
        <img src="../images/menu.php" alt="" />
      </div>

      <!--responsive navbar -->
      <div class="dropdown_menu">
        <li><a href="travelly.php#home">Home</a></li>
        <li><a href="travelly.php#destination">Destination</a></li>
        <li><a href="travelly.php#package">Package</a></li>
        <li><a href="travelly.php#about">About Us</a></li>
        <li><a href="../html/contact.php">Contact Us</a></li>
      </div>
    </header>

    <!-- registration form ---------------------------------------------------------------------------------->

    <div class="booking" id="booking">
      <div class="form-box">
        <div class="register-container" id="register">
          <div class="top">
            <span>
              Have an account? <a href="../html/login.php" id="login-link">Login</a>
            </span>
            <h1>Sign Up</h1>
          </div>

          <!-- <form id="register-form"> -->
          <form action="../php/book.php" method="POST">
            <div class="two-forms">
              <div class="input-box">
                <input
                  type="text"
                  class="input-field"
                  placeholder="First Name"
                  name="first_name"
                />
                <img src="../images/user.php" alt="" />
              </div>
              <div class="input-box">
                <input
                  type="text"
                  class="input-field"
                  placeholder="Last Name"
                  name="last_name"
                />
                <img src="../images/user.php" alt="" />
              </div>
            </div>
            <div class="input-box">
              <input
                type="email"
                class="input-field"
                placeholder="Email"
                name="email"
              />
              <img src="../images/email1.php" alt="" />
            </div>
            <div class="input-box">
              <input
                type="password"
                class="input-field"
                placeholder="Password"
                name="password"
              />
              <img src="../images/lock.php" alt="" />
            </div>

            <button type="submit" class="submit">Register</button>

            <div class="two-col">
              <div class="one">
                <input type="checkbox" id="register-check" name="remember_me" />
                <label for="register-check">Remember Me</label>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="../script/travelly.js"></script>
  </body>
</html>
