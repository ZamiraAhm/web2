<?php
require_once 'reservationsMapper.php';

if (isset($_POST['btn-remove-message'])) {
    $id = $_POST['ID'];
    $mapper = new reservationsMapper();
    $mapper->deleteMessages($id);
    header("Location:../views/dashboard.php");
}
