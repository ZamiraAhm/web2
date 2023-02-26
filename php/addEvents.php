<?php
require_once "eventsMapper.php";

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get form data
  $title = $_POST['title'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $description = $_POST['description'];
  $added_By = $_SESSION['admin_name'];

  // Upload image
  $target_dir = "images/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
  $image = $target_file;

  // Insert event into database
  $eventsMapper = new eventsMapper();
  $eventsMapper->insertEvents($title, $date, $time, $description, $image, $added_By);

  // Redirect to dashboard
  header('Location: admin_page.php');
}

?>

<!-- Add event form -->
<h2>Add Event</h2>
<form method="post" enctype="multipart/form-data">
  <label for="title">Title</label>
  <input type="text" name="title" required><br><br>

  <label for="date">Date</label>
  <input type="date" name="date" required><br><br>

  <label for="time">Time</label>
  <input type="time" name="time" required><br><br>

  <label for="description">Description</label>
  <textarea name="description" rows="5" required></textarea><br><br>

  <label for="image">Image</label>
  <input type="file" name="image" required><br><br>

  <input type="submit" value="Add Event">
</form>
