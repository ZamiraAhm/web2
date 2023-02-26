


<!DOCTYPE html>
<html >

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bueno Bistro</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="css/reservation.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/login_register.css">
  
</head>

<body >
  <?php
  include "components/header.php";
  ?>
    <?php
  // Database connection code
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "projekti";

  // Create a connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Handle form submission
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST["name"];
    $phone_number = $_POST["phone"];
    $number_of_people = intval($_POST["number_of_people"]);
    $occasion = $_POST["occasion"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    // Insert the data into the database
    $sql = "INSERT INTO reservations (name, phone_number, number_of_people, occasion, date, time) VALUES ('$name', '$phone_number', '$number_of_people', '$occasion', '$date', '$time')";

    if ($conn->query($sql) === TRUE) {
      echo "Reservation created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  ?>
  <main>
  <form id="reservation" method="POST" >
      <h1>Reservation</h1>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      
      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" required>
      
      <label for="number_of_people">Number of People:</label>
      <input type="number" id="number_of_people" name="number_of_people" min="1" max="10" required>
      
      <label for="occasion">Occasion:</label>
      <input type="text" id="occasion" name="occasion" required>

      <label for="date">Date:</label>
      <input type="date" id="date" name="date" required>
      
      <label for="time">Time:</label>
      <input type="time" id="time" name="time" required>

      <!--<label for="confirmation">Confirmation:</label>
      <select id="confirmation" name="confirmation">
        <option value="phone">Phone</option>
        <option value="text">Text Message</option>
      </select>-->
      
      <button type="submit">Make Reservation</button>
    </form>
</main>
  <?php
  include "components/footer.php";
  ?>

</body>

</html>