<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bueno Bistro</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/event.css">
  <link rel="stylesheet" href="css/login_register.css">
  <?php
  require_once 'php/eventsMapper.php';
  $mapper = new eventsMapper();
  $news = $mapper->getAllEvents();
  ?>
</head>

<body>
  <?php
  include "components/header.php";
  ?>
  <main>
 <div class="slidshow-container">
  <h1>Upcoming events</h1>
  <?php
  $events = array(
    array(
      "img" => "img/wine.png",
      "date" => "February 14th",
      "time" => "6-9 PM",
      "title" => "Wine and Dine Night",
      "description" => "Join us for a romantic evening at our restaurant on February 14th from 6-9 PM. We're celebrating Valentine's Day with our Wine and Dine Night, featuring a special three-course meal and wine pairing. You and your loved one can enjoy a delectable culinary experience with dishes crafted by our skilled chefs, paired with perfectly matched wines. Take in the cozy and intimate atmosphere as you toast to love with a glass of fine wine. Don't miss the chance to create a special memory with your special someone. Reserve your table now!"
    ),
    array(
      "img" => "img/prov3.jpg",
      "date" => "February 21st",
      "time" => "6 PM",
      "title" => "Chef's Table with Chef Joseph",
      "description" => "Join us at our restaurant for a special event on February 21st at 6 PM - Chef's Table with Chef Joseph. Enjoy an intimate dining experience as Chef Joseph prepares a four-course meal right in front of you using the finest ingredients. You'll have the opportunity to ask questions and learn more about the art of cooking, while savoring carefully selected wine pairings. Don't miss this exceptional evening of food, wine, and conversation. Reserve your table now!"
    ),
    array(
      "img" => "img/brunch.png",
      "date" => "February 27th",
      "time" => "11 AM - 2 PM",
      "title" => "Sunday Brunch",
      "description" => "Join us for our Sunday Brunch , featuring live music and unlimited mimosas. Enjoy a relaxed atmosphere, delicious food, and refreshing drinks, all while being serenaded by our talented musician. Come unwind and recharge with us this Sunday! Reserve your table now!"
    ),
    array(
      "img" => "img/llajv.jpg",
      "date" => "March 12th",
      "time" => "",
      "title" => "Live Music Night with The Groove Kings",
      "description" => "Join us on Saturday, March 12th for a night of live music at our restaurant! We're excited to feature The Groove Kings, a talented funk and soul band that will provide an entertaining performance while you enjoy our delicious food and drinks. Don't miss out on a night of great food, drinks, and music! Reserve your table now!"
    )
  );
  
  foreach ($events as $event) {
    ?>
    <div class="slide">
      <img class="sliderImages" src="<?php echo $event["img"]; ?>">
      <p><?php echo $event["title"] . " (" . $event["date"] . ", " . $event["time"] . "): " . $event["description"]; ?></p>
    </div>
    <?php
  }
  ?>
  <a class="prev" id="prev">&#10094;</a>
  <a class="next" id="next">&#10095;</a>
</div>
<script src = "slider.js"></script>
</main>
  <?php
  include "components/footer.php";
  ?>


</body>

</html>