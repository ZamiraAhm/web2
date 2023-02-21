<?php
session_start();
if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="../css/createMenu.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>New Menu</title>
    </head>

    <body>
        <?php

        include_once '../php/userMapper.php';
        ?>
        <div class="back-button">
            <a href="../menu.php" id="btn-back">Kthehu Mbrapa</a>
        </div>
    </body>
    <div class="container">

        <div class="btn-container">
            <H1> Menu informations:</H1>
        </div>

        <form id="form-login" action="../php/addMenu.php" method="POST" enctype="multipart/form-data" onsubmit='return validimi()'>
            <div class="login forms form-style ">
                <label for="">Name:</label>
                <input type="text" name="name"  class="input input-field" />
                <label for="">Price:</label>
                <input type="number" name="price" class="input input-field" />
                <input type="text" name="added_By" hidden value="<?php $temp =  $_SESSION["name"];
                                                                    //$temp = $this->getUsername();
                                                                    //var_dump($temp) ;
                                                                    $mapper = new userMapper;
                                                                    $result = $mapper->getUserByID($temp);

                                                                    echo $result['username'] ?>">
                <input type="file" id="image" name="file" accept="image/*">
                <input id="login_submit" name="menu-submit" type="submit" class="input submit" value="Add Menu" />
            </div>
        </form>
    </div>
    <script src="../validim_events_menu.js"></script>
    </html>
<?php } else {
    header("Location:../index.php");
} ?></meta>