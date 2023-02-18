<?php
require_once 'menuMapper.php';

if (isset($_POST['product-submit'])) {

    $mapper = new menuMapper;
    $image = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];


    $data = file_get_contents($image);
    
    $mapper->insertMenu($_POST['name'], $_POST['details'],$_POST['[price]'], $data, $_POST['added_By']);
    header("Location:../menu.php");
}
