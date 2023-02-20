<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HOPE</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login_register.css">
    <link rel="stylesheet" href="css/menu-template.css">

</head>
<?php
include 'components/header.php';
$item_id = $_GET['id_menu'] ?? 1;
require_once 'php/menuMapper.php';
$mapper = new menuMapper();
$products = $mapper->getMenuByID($item_id);

?>

<body>
    <div class='Menu_container'>
        <div class="img_container">
            <img id='menu_img' src="<?php echo $uri = 'data:image/png;base64,' . base64_encode($menus['img']); ?>" alt="">
        </div>
        <div class='info_container'>
            <div class='menu_info_container'>
                <h2 id='emri_menus' class='text'><?php echo $menus['emri'] ?></h2>
                <h4 id='cmimi' class='text'><?php echo $menus['cmimi'].'$' ?></h4>
            </div>
            <div class="buy_buttons">
                <button id='btn-buy' class="btn-menu">BUY</button>
                <button id='btn-cart' class="btn-menu">Add To Cart</button>
            </div>
        </div>


    </div>

</body>

<?php
include 'components/footer.php';
?>