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
                    <a href="admin_page.php">Admin Page </a>
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

</body>
</html>