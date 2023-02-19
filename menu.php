<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HOPE</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/login_register.css">
  <?php
  require_once 'php/menuMapper.php';
  $mapper = new menuMapper();
  $menu = $mapper->getAllMenus();
  ?>
</head>

<body>
  <?php
  include "components/header.php";
  ?>

  <main>
  <section class="menu">
  <div class="section-title" id="menu">
    <h2>Our Menu</h2>
    <p>Lorem, ipsum.</p>
  </div>
  <div class="menus">
    <?php
    $menu_items = array(
      "Appetizers" => array(
        array(
          "name" => "Bruschetta",
          "price" => "7.5$",
          "description" => "(grilled bread topped with tomato, basil, and mozzarella)",
          "img" => "img/brusketa.jpeg"
        ),
        array(
          "name" => "Calamari",
          "price" => "7.5$",
          "description" => "(deep-fried calamari)",
          "img" => "img/calamari.jpg"
        ),
        array(
          "name" => "Salad Capr",
          "price" => "6.0$",
          "description" => "(sliced tomatoes, mozzarella, and basil)",
          "img" => "img/capresesal.jfif"
        )
      ),
      "Pasta dishes" => array(
        array(
          "name" => "Spaghetti carbonara",
          "price" => "10.00$",
          "description" => "(spaghetti with bacon, eggs, and Parmesan cheese)",
          "img" => "img/brusketa.jpeg"
        ),
        array(
          "name" => "Fettuccine",
          "price" => "11.00$",
          "description" => "(fettuccine with cream and Parmesan sauce)",
          "img" => "img/calamari.jpg"
        ),
        array(
          "name" => "Lasagna",
          "price" => "14.50$",
          "description" => "(layered pasta with meat and cheese)",
          "img" => "img/capresesal.jfif"
        )
      ),
      "Pizzas" => array(
        array(
          "name" => "Margherita",
          "price" => "15.00$",
          "description" => "(tomato sauce, mozzarella cheese, and fresh basil)",
          "img" => "img/brusketa.jpeg"
        ),
        array(
          "name" => "Pepperoni",
          "price" => "20.00$",
          "description" => "(spicy pepperoni sausage and mozzarella cheese)",
          "img" => "img/calamari.jpg"
        ),
        array(
          "name" => "Veggie",
          "price" => "22.00$",
          "description" => "(topped with a variety of vegetables, such as bell peppers, onions, mushrooms, and olives)",
          "img" => "img/capresesal.jfif"
        )
      )
    );
    
    foreach ($menu_items as $category => $items) {
      echo "<div class='menu-column'>";
      echo "<h4>{$category}</h4>";
      foreach ($items as $item) {
        echo "<div class='single-menu'>";
        echo "<img src='{$item["img"]}' alt=''>";
        echo "<div class='menu-content'>";
        echo "<h5>{$item["name"]} <span>{$item["price"]}</span></h5>";
        echo "<p>{$item["description"]}</p>";
        echo "</div>";
        echo "</div>";
      }
      echo "</div>";
    }
    ?>
  </div>
</section>


  </main>
  <?php

  if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
  ?>
    <div class="new-menu-button">
      <a href="views/createMenu.php" id="btn-new">Add Menu</a>
    </div>
  <?php } ?>


  <?php
  include "components/footer.php";
  ?>

</body>

</html>