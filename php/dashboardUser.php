<?php

require_once 'userMapper.php';
require_once 'menuMapper.php';

if (isset($_POST['btn-remove'])) {
    $id = $_POST['ID'];
    $mapper = new userMapper;
    $mapper->deleteUser($id);
    header("Location:../views/dashboard.php");
}
if (isset($_POST['btn-upgrade-role'])) {
    $id = $_POST['ID'];
    $mapper = new userMapper;
    $mapper->upgradeRole($id);
    header("Location:../views/dashboard.php");
}
if (isset($_POST['btn-downgrade-role'])) {
    $id = $_POST['ID'];
    $mapper = new userMapper;
    $mapper->downgradeRole($id);
    header("Location:../views/dashboard.php");
}

if (isset($_POST['btn-remove-menu'])) {
    $id = $_POST['ID'];
    $mapper = new menuMapper;
    $mapper->deleteMenu($id);
    header("Location:../views/dashboard.php");
}
if (isset($_POST['btn-remove-lajmi'])) {
    $id = $_POST['ID'];
    $mapper = new menuMapper;
    $mapper->deleteMenu($id);
    header("Location:../views/dashboard.php");
}
