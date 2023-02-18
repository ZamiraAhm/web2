<?php
require_once 'eventsMapper.php';

if (isset($_POST['events-submit'])) {

    $mapper = new eventsMapper;
    $image = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];


    $data = file_get_contents($image);
    $mapper->insertNews($_POST['name'], $_POST['description'], $data, $_POST['added_By']);
    header("Location:../events.php");
}
