<?php
session_start();

// redirect to login page if user is not logged in
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
   <title>Add Menu Item</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/login_register.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h1>Add Menu Item</h1>
      <form method="post" enctype="multipart/form-data">
         <label for="name">Name:</label>
         <input type="text" id="name" name="name" required><br><br>

         <label for="details">Details:</label>
         <textarea id="details" name="details" rows="4" cols="50" required></textarea><br><br>

         <label for="price">Price:</label>
         <input type="number" id="price" name="price" required><br><br>

         <label for="image">Image:</label>
         <input type="file" id="image" name="image" required><br><br>

         <input type="submit" name="submit" value="Add Item">
      </form>
      <br>
      <a href="admin_page.php" class="btn">Back to Dashboard</a>
   </div>

</div>

</body>
</html>
