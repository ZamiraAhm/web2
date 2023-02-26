<?php
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
   <title>Add Event</title>

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
   <div class="container">
      <div class="content">
         <h3>Add New Event</h3>
         <form action="add_event_handler.php" method="post">
            <label for="image">Image:</label>
            <input type="text" id="image" name="image" required><br><br>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required><br><br>

            <label for="time">Time:</label>
            <input type="time" id="time" name="time" required><br><br>

            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required><br><br>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

            <input type="submit" value="Add Event">
         </form>
      </div>
   </div>

</body>
</html>
