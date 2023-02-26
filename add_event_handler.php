<?php
include 'config.php';
include 'eventsMapper.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $added_By = $_SESSION['admin_id'];

    // Check if all fields are filled
    if(empty($title) || empty($description) || empty($date) || empty($time)) {
        $_SESSION['error_msg'] = 'Please fill all fields';
        header('Location: add_event.php');
        exit();
    }

    // Check if date is in the correct format
    $date_regex = "/^\d{4}-\d{2}-\d{2}$/";
    if (!preg_match($date_regex, $date)) {
        $_SESSION['error_msg'] = 'Date must be in the format of yyyy-mm-dd';
        header('Location: add_event.php');
        exit();
    }

    // Check if time is in the correct format
    $time_regex = "/^(?:2[0-3]|[01][0-9]):[0-5][0-9]$/";
    if (!preg_match($time_regex, $time)) {
        $_SESSION['error_msg'] = 'Time must be in the format of hh:mm';
        header('Location: add_event.php');
        exit();
    }

    // Check if image is uploaded
    if(isset($_FILES['image']) && !empty($_FILES['image']['tmp_name'])) {
        $image = $_FILES['image']['name'];
        $temp = $_FILES['image']['tmp_name'];
        $dir = 'uploads/';
        move_uploaded_file($temp, $dir.$image);
    } else {
        $image = '';
    }

    // Insert event into database
    $mapper = new eventsMapper();
    $mapper->insertEvents($title, $description, $date, $time, $image, $added_By);

    // Redirect to events page
    header('Location: events.php');
    exit();
}

?>
