<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HOPE</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="css/reservation.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/login_register.css">
 
</head>

<body>
  <?php
  include "components/header.php";
  ?>
  <main>
  <form id="reservation">
      <h1>Reservation</h1>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      
      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" required>
      
      <label for="num-people">Number of People:</label>
      <input type="number" id="num-people" name="num-people" min="1" max="10" required>
      
      <label for="occasion">Occasion:</label>
      <input type="text" id="occasion" name="occasion" required>

      <label for="date">Date:</label>
      <input type="date" id="date" name="date" required>
      
      <label for="time">Time:</label>
      <input type="time" id="time" name="time" required>

      <label for="confirmation">Confirmation:</label>
      <select id="confirmation" name="confirmation">
        <option value="phone">Phone</option>
        <option value="text">Text Message</option>
      </select>
      
      <button type="submit">Make Reservation</button>
    </form>
</main>
  <?php
  include "components/footer.php";
  ?>

</body>

</html>