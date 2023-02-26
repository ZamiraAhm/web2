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

</head>
<body>
   
<div class="container">

   <div class="content">
   <header>
  <h1 class="logo">Admin Page</h1>
  <nav class="navigation">
    <a href="admin_page.php#">Home</a>
    <a href="add_event.php">Events</a>
    <a href="add_menu_form.php">Menus</a>
    <a href="logout.php">Logout</a>
  </nav>
</header>
</div>

</body>
</html>