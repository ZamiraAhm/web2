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

// Handle reservation deletion
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // Get the reservation ID from the URL
  $id = $_GET["id"];

  // Delete the reservation from the database
  $sql = "DELETE FROM reservations WHERE id = $id";

  if ($conn->query($sql) === TRUE) {
    echo "Reservation deleted successfully";
  } else {
    echo "Error deleting reservation: " . $conn->error;
  }
}

// Close the database connection
$conn->close();
?>