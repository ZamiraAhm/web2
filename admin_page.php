<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/login_register.css">
   <link rel="stylesheet" href="css/stili.css">
   <link rel="stylesheet" href="css/reservationdash.css">

</head>
<body>
   
<header>
    <nav>
        <div>
            <a href="admin_page.php">  </a>
        </div>
        <div class="navLeft">
            <ul class="nav_links">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="reservation_dashboard.php">Admin Page </a>
                </li>

                <li>
                    <a href="add_event.php">Add Events</a>
                </li>
                <li>
                    <a href="add_menu_form.php">Add Menu</a>
                </li>
            </ul>
        </div>
        <div class="navRight">
    <ul class="nav_buttons">
        
            <li><a href="php/logout.php" class="btn" id="btn_logout">Log out</a></li>
    </ul>
</div>
</header>
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

// Handle delete request
if (isset($_POST["delete_id"])) {
  $delete_id = $_POST["delete_id"];
  $sql = "DELETE FROM reservations WHERE id=$delete_id";
  if ($conn->query($sql) === TRUE) {
    echo "Reservation deleted successfully";
  } else {
    echo "Error deleting reservation: " . $conn->error;
  }
}

// Query the database for reservations
$sql = "SELECT * FROM reservations";
$result = $conn->query($sql);
?>

<!-- Reservation dashboard table -->
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Phone Number</th>
      <th>Number of People</th>
      <th>Occasion</th>
      <th>Date</th>
      <th>Time</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if ($result->num_rows > 0) {
      // Output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["phone_number"] . "</td>";
        echo "<td>" . $row["number_of_people"] . "</td>";
        echo "<td>" . $row["occasion"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td>" . $row["time"] . "</td>";
        echo "<td>
                <form method='POST' onsubmit=\"return confirm('Are you sure you want to delete this reservation?');\">
                  <input type='hidden' name='delete_id' value='" . $row["id"] . "'>
                  <button type='submit' >Delete</button>
                </form>
              </td>";
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='8'>No reservations found</td></tr>";
    }
    ?>
  </tbody>
</table>
</body>
</html>