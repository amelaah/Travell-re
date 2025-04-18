<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css" />
  </head>
  <body>
    <!-- navbar ------------------------------------------------------------------------------------------------------->
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
    <!-- login form  ------------------------------------------------------------------------------------------------------>
    <div class="login" id="login">
      <div class="form-box">
        <div class="login-container">
          <div class="top">
            <span
              >Don't have an account?
              <a href="../html/book.php" onclick="register()">Sign Up</a>
            </span>
            <h1>Login</h1>
          </div>
          <form action="../php/login.php" method="POST">
            <div class="input-box">
              <input
                type="email"
                class="input-field"
                placeholder="Username or Email"
                name="email"
              />
              <img src="../images/user.php" alt="" />
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
            <div class="input-box">
              <input type="submit" class="submit" value="Login" />
            </div>
            <div class="two-col">
              <div class="one">
                <input type="checkbox" id="login-check" name="remember_me" />
                <label for="login-check">Remember Me</label>
              </div>
            </div>
          </form>
          <!-- </div> -->
        </div>
      </div>
    </div>
    <script src="../script/travelly.js"></script>
  </body>
</html>
