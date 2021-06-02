<?php
  require_once "queryDb.php";

  $product = getProducts();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="./css/styles.css">
  <link rel="stylesheet" href="./css/main.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marcon's Pizzeria | Home</title>
</head>

<body>
  <header>
    <p class='header-info flexed'>We open Monday to Friday from 10am to 10pm and Weekends from 11am to 11pm</p>
    <nav class='nav flexed'>
      <img class='nav-logo' src="./img/logo.svg" alt="Marcon's Pizzeria" />
      <ul class='nav-links'>
        <li><a href="./index.html">Home</a></li>
        <div class='separator'></div>
        <li><a href="./menu.html">Pizza Menu</a></li>
        <div class='separator'></div>
        <li><a href="./order.html">Order Pizza</a></li>
        <div class='separator'></div>
        <li><a href="./about.html">About Marcon's</a></li>
        <div class='separator'></div>
        <li><a href="./hire.html">We Hire</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <table class="tg">
      <thead>
        <tr class='table-head'>
          <th class='table-price'>Price</th>
          <th class='table-name'>Pizza Name</th>
          <th class='table-info'>Description</th>
          <th class='table-nutrit'>Nutritional Information</th>
        </tr>
      </thead>
      <tbody>
      <?php
          foreach ($product as $items) {
            echo "<tr>";
            echo "<td>$".$items['PRICE']."</td>";
            echo "<td>".$items['PRODUCTNAME']."</td>";
            echo "<td>".$items['DESCRIPTION']."</td>";
            echo "<td>".$items['NUTRITIONAL']."</td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
  </main>
  <footer>
    <div class='footer-element'>Website by s5242191©</div>
    <div class='footer-element'>Phone: (07) 3200 6938</div>
    <div class='footer-element'><a href="#" ?>Email: info@marcons.com.au</a></div>
  </footer>
</body>

</html>