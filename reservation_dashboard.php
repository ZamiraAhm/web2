<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Reservation Dashboard</title>
  <link rel="stylesheet" href="css/reservationdash.css">
</head>
<body>
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

    // Retrieve data from the reservations table
    $sql = "SELECT * FROM reservations";
    $result = $conn->query($sql);
  ?>
  <h1>Reservation Dashboard</h1>
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Number of People</th>
        <th>Occasion</th>
        <th>Date</th>
        <th>Time</th>
      </tr>
    </thead>
    <tbody>
      <?php
        if ($result->num_rows > 0) {
          // Output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["name"]."</td><td>".$row["phone_number"]."</td><td>".$row["number_of_people"]."</td><td>".$row["occasion"]."</td><td>".$row["date"]."</td><td>".$row["time"]."</td></tr>";
          }
        } else {
          echo "<tr><td colspan='6'>No reservations found</td></tr>";
        }
      ?>
    </tbody>
  </table>
  <?php
    // Close the connection
    $conn->close();
  ?>
</body>
</html>
