<?php
$mysqli = new mysqli("localhost", "username", "password", "projekti");


if (isset($_POST['login'])) {
  
  $username = $_POST['zamira'];
  $password = $_POST['Ahmeti123!'];

 
  $result = $mysqli->query("SELECT * FROM users WHERE username='$username'");
  $user = $result->fetch_assoc();

 
  if (password_verify($password, $user['password'])) {
    // Create a session for the user
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['is_admin'] = $user['is_admin'];

    // Redirect the user to the dashboard page
    header("Location: dashboard.php");
    exit();
  } else {
    // Display an error message if the entered credentials are incorrect
    echo "Invalid username or password.";
  }
}
?>