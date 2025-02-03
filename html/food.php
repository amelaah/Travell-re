<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Food service</title>
    <link rel="stylesheet" href="../css/food.css" />
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

    <!-- food ------------------------------------------------------------------------------------------------- -->
    <section class="food" id="food">
      <div class="food-container">
        <!-- box1 ------------------------------------------------------------------------------------>
        <div class="box1">
          <div class="box">
            <div class="logo">
              <img src="../images/bar.php" alt="bar" />
            </div>
            <div class="info">
              <ol>
                <li>Connaught Bar - London</li>
                <li>Dante - New York City</li>
                <li>Florería Atlántico - Buenos Aires</li>
                <li>The Old Man - Hong Kong</li>
                <li>American Bar at The Savoy - London</li>
                <li>Paradiso - Barcelona</li>
                <li>Atlas - Singapore</li>
                <li>Licorería Limantour - Mexico City</li>
                <li>Bar Benfiddich - Tokyo</li>
                <li>Death & Co - New York City</li>
                <li>The Baxter Inn - Sydney</li>
                <li>Tropic City - Bangkok</li>
                <li>Hemingway Bar - Paris</li>
                <li>Bar Termini - London</li>
                <li>Caribe Hilton - San Juan</li>
                <li>Little Red Door - Paris</li>
                <li>28 HongKong Street - Singapore</li>
                <li>Soggy Dollar Bar - Jost Van Dyke</li>
                <li>Quinary - Hong Kong</li>
                <li>Employees Only - New York City</li>
              </ol>
            </div>
          </div>
        </div>

        <!-- box2 ----------------------------------------------------------------------------------- -->
        <div class="box2">
          <div class="box">
            <div class="logo">
              <img src="../images/hotel.php" alt="hotel" />
            </div>
            <div class="info">
              <ol>
                <li>The Burj Al Arab - Dubai, UAE</li>
                <li>The Ritz Paris - Paris, France</li>
                <li>The Plaza Hotel - New York City, USA</li>
                <li>Hotel de Crillon - Paris, France</li>
                <li>Four Seasons Hotel - Sydney, Australia</li>
                <li>The Waldorf Astoria - New York City, USA</li>
                <li>The St. Regis - New York City, USA</li>
                <li>The Shangri-La Hotel - Paris, France</li>
                <li>The Peninsula - Hong Kong</li>
                <li>Palace Hotel - Tokyo, Japan</li>
                <li>Adlon Kempinski Hotel - Berlin, Germany</li>
                <li>Hotel Martinez - Cannes, France</li>
                <li>The Dorchester - London, UK</li>
                <li>Mandarin Oriental - Bangkok, Thailand</li>
                <li>Claridge's - London, UK</li>
                <li>Marina Bay Sands - Singapore</li>
                <li>The Langham - Melbourne, Australia</li>
                <li>The Oberoi Udaivilas - Udaipur, India</li>
                <li>One&Only Reethi Rah - Maldives</li>
                <li>The InterContinental - Hong Kong</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- box3------------------------------------------------------------------------------------------- -->

        <div class="box3">
          <div class="box">
            <div class="logo">
              <img src="../images/rest.php" alt="rest" />
            </div>
            <div class="info">
              <ol>
                <li>El Celler de Can Roca - Girona, Spain</li>
                <li>Noma - Copenhagen, Denmark</li>
                <li>Osteria Francescana - Modena, Italy</li>
                <li>Le Bernardin - New York City, USA</li>
                <li>The French Laundry - Yountville, USA</li>
                <li>Per Se - New York City, USA</li>
                <li>Mirazur - Menton, France</li>
                <li>Eleven Madison Park - New York City, USA</li>
                <li>Attica - Melbourne, Australia</li>
                <li>Quintonil - Mexico City, Mexico</li>
                <li>Gaggan - Bangkok, Thailand</li>
                <li>La Pergola - Rome, Italy</li>
                <li>Central - Lima, Peru</li>
                <li>Mugaritz - San Sebastián, Spain</li>
                <li>Restaurant Gordon Ramsay - London, UK</li>
                <li>The Ledbury - London, UK</li>
                <li>Alinea - Chicago, USA</li>
                <li>Chez Panisse - Berkeley, USA</li>
                <li>Le Jules Verne - Paris, France</li>
                <li>Blue Hill at Stone Barns - Pocantico Hills, USA</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <!-- dropdown - container  --------------------------------------------------------------------------------------------------------------->

      <div class="dropdown_main_container">
        <!-- box1 ----------------------------------------------------------------------------------- -->

        <div class="dropdown_container">
          <div class="logo">
            <img src="../images/bar.php" alt="bar" />
          </div>
          <label for="options">Select an option:</label>
          <select id="options">
            <option value=""></option>
            <option value="connaught-bar">Connaught Bar - London</option>
            <option value="dante">Dante - New York City</option>
            <option value="floreria-atlantico">
              Florería Atlántico - Buenos Aires
            </option>
            <option value="the-old-man">The Old Man - Hong Kong</option>
            <option value="american-bar-savoy">
              American Bar at The Savoy - London
            </option>
            <option value="paradiso">Paradiso - Barcelona</option>
            <option value="atlas">Atlas - Singapore</option>
            <option value="licoreria-limantour">
              Licorería Limantour - Mexico City
            </option>
            <option value="bar-benfiddich">Bar Benfiddich - Tokyo</option>
            <option value="death-and-co">Death & Co - New York City</option>
            <option value="baxter-inn">The Baxter Inn - Sydney</option>
            <option value="tropic-city">Tropic City - Bangkok</option>
            <option value="hemingway-bar">Hemingway Bar - Paris</option>
            <option value="bar-termini">Bar Termini - London</option>
            <option value="caribe-hilton">Caribe Hilton - San Juan</option>
            <option value="little-red-door">Little Red Door - Paris</option>
            <option value="28-hongkong-street">
              28 HongKong Street - Singapore
            </option>
            <option value="soggy-dollar-bar">
              Soggy Dollar Bar - Jost Van Dyke
            </option>
            <option value="quinary">Quinary - Hong Kong</option>
            <option value="employees-only">
              Employees Only - New York City
            </option>
          </select>
        </div>

        <!-- box2 ----------------------------------------------------------------------------------- -->
        <div class="dropdown_container">
          <div class="logo">
            <img src="../images/hotel.php" alt="hotel" />
          </div>
          <label for="options">Select an option:</label>
          <select id="options">
            <option value=""></option>
            <option value="burj-al-arab">The Burj Al Arab - Dubai, UAE</option>
            <option value="ritz-paris">The Ritz Paris - Paris, France</option>
            <option value="plaza-hotel">
              The Plaza Hotel - New York City, USA
            </option>
            <option value="hotel-de-crillon">
              Hotel de Crillon - Paris, France
            </option>
            <option value="four-seasons-sydney">
              Four Seasons Hotel - Sydney, Australia
            </option>
            <option value="waldorf-astoria">
              The Waldorf Astoria - New York City, USA
            </option>
            <option value="st-regis">The St. Regis - New York City, USA</option>
            <option value="shangri-la">
              The Shangri-La Hotel - Paris, France
            </option>
            <option value="peninsula">The Peninsula - Hong Kong</option>
            <option value="palace-hotel">Palace Hotel - Tokyo, Japan</option>
            <option value="adlon-kempinski">
              Adlon Kempinski Hotel - Berlin, Germany
            </option>
            <option value="hotel-martinez">
              Hotel Martinez - Cannes, France
            </option>
            <option value="dorchester">The Dorchester - London, UK</option>
            <option value="mandarin-oriental">
              Mandarin Oriental - Bangkok, Thailand
            </option>
            <option value="claridges">Claridge's - London, UK</option>
            <option value="marina-bay-sands">
              Marina Bay Sands - Singapore
            </option>
            <option value="langham-melbourne">
              The Langham - Melbourne, Australia
            </option>
            <option value="oberoi-udaivilas">
              The Oberoi Udaivilas - Udaipur, India
            </option>
            <option value="one-and-only">One&Only Reethi Rah - Maldives</option>
            <option value="intercontinental">
              The InterContinental - Hong Kong
            </option>
          </select>
        </div>
        
        <!-- box3------------------------------------------------------------------------------------------- -->
        <div class="dropdown_container">
          <div class="logo">
            <img src="../images/rest.php" alt="rest" />
          </div>
          <label for="options">Select an option:</label>
          <select id="options">
            <option value=""></option>
            <option value="el-celler-de-can-roca">
              El Celler de Can Roca - Girona, Spain
            </option>
            <option value="noma">Noma - Copenhagen, Denmark</option>
            <option value="osteria-francescana">
              Osteria Francescana - Modena, Italy
            </option>
            <option value="le-bernardin">
              Le Bernardin - New York City, USA
            </option>
            <option value="the-french-laundry">
              The French Laundry - Yountville, USA
            </option>
            <option value="per-se">Per Se - New York City, USA</option>
            <option value="mirazur">Mirazur - Menton, France</option>
            <option value="eleven-madison-park">
              Eleven Madison Park - New York City, USA
            </option>
            <option value="attica">Attica - Melbourne, Australia</option>
            <option value="quintonil">Quintonil - Mexico City, Mexico</option>
            <option value="gaggan">Gaggan - Bangkok, Thailand</option>
            <option value="la-pergola">La Pergola - Rome, Italy</option>
            <option value="central">Central - Lima, Peru</option>
            <option value="mugaritz">Mugaritz - San Sebastián, Spain</option>
            <option value="restaurant-gordon-ramsay">
              Restaurant Gordon Ramsay - London, UK
            </option>
            <option value="the-ledbury">The Ledbury - London, UK</option>
            <option value="alinea">Alinea - Chicago, USA</option>
            <option value="chez-panisse">Chez Panisse - Berkeley, USA</option>
            <option value="le-jules-verne">
              Le Jules Verne - Paris, France
            </option>
            <option value="blue-hill">
              Blue Hill at Stone Barns - Pocantico Hills, USA
            </option>
          </select>
        </div>
      </div>
    </section>

    <script src="../script/travelly.js"></script>
    <script src="../script/food.js"></script>
  </body>
</html>
