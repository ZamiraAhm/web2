<?php
session_start();

// Check if user is logged in as admin, if not redirect to login page
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header('Location: /views/login.php');
    exit();
}

?>

<?php
session_start();
if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/dashboard.css">
        <title>Dashboard</title>
    </head>

    <body>
        <div class="back-button">
            <a href="../index.php" id="btn-back">Go Back</a>
        </div>
        <?php
        require_once '../php/reservationsMapper.php';
        $mapperMessages = new reservationsMapper();
        $messages = $mapperMessages->getAllMessages();
        require_once '../php/userMapper.php';
        $mapperUser = new UserMapper();
        $users = $mapperUser->getAllUsers();
        require_once '../php/menuMapper.php';
        $mapperMenu = new menuMapper();
        $menus = $mapperMenu->getAllMenu();
        require_once '../php/eventsMapper.php';
        $mapperEvents = new eventsMapper();
        $events = $mapperEvents->getAllEvents();
        ?>

        <div class='btn_dashboard_container'> 
            <button id="btn-users" class="btn">Users</button>
            <button id="btn-reservation" class="btn">Reservation</button>
            <button id="btn-menu" class="btn">Menu</button>
            <button id="btn-events" class="btn">Events</button>
        </div>
        <div class="users tables ">
            <table class="content-table-users">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Delete User</th>
                        <th>Add Admin</th>
                        <th>Remove Admin</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($users as $useri) { ?>
                        <tr>
                            <td><?php echo $useri['user_id']; ?></td>
                            <td><?php echo $useri['username']; ?></td>
                            <td><?php echo $useri['email']; ?></td>
                            <td><?php echo $useri['role']; ?></td>
                            <form action="../php/dashboardUser.php" method="POST">
                                <input type="text" name="ID" hidden value="<?php echo $useri['user_id']; ?>"></input>
                                <td><input id="remove" name="btn-remove" type="submit" class="input submit" value="remove" /></td>
                            </form>
                            <form action="../php/dashboardUser.php" method="POST">
                                <input type="text" name="ID" hidden value="<?php echo $useri['user_id']; ?>"></input>
                                <td><input id="upgrade-role" name="btn-upgrade-role" type="submit" class="input submit" value="upgrade role" /></td>
                            </form>
                            <form action="../php/dashboardUser.php" method="POST">
                                <input type="text" name="ID" hidden value="<?php echo $useri['user_id']; ?>"></input>
                                <td><input id="upgrade-role" name="btn-downgrade-role" type="submit" class="input submit" value="downgrade role" /></td>
                            </form>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="messages tables hidden">
            <table class="table-messages">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Reservation</th>
                        <th>Delete Reservation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($reservation as $reservations) {
                    ?>
                        <tr>
                            <td><?php echo  $reservations['reservation_id']; ?></td>
                            <td><?php echo $reservations['name']; ?></td>
                            <td><?php echo $reservations['last name']; ?></td>
                            <td><?php echo $reservations['email']; ?></td>
                            <td><?php $string = $reservations['reservation'];
                                if (strlen($string) > 50) {
                                    $split = explode(" ", $string);
                                    for ($i = 0; $i < sizeof($split); $i++) {
                                        if ($i != 0 && $i % 10 == 0) {
                                            echo $split[$i] . "</br>";
                                        } else {
                                            echo $split[$i] . " ";
                                        }
                                    }
                                } else {
                                    echo $string;
                                }
                                ?></td>
                            <form action="../php/dashboardMessage.php" method="POST">
                                <input type="text" name="ID" hidden value="<?php echo $reservations['message_ID']; ?>"></input>
                                <td><input id="remove" name="btn-remove-message" type="submit" class="input submit" value="remove" /></td>
                            </form>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="menu tables hidden">
            <table class="content-table-users">
                <thead>
                    <tr>
                        <th>ID_menu</th>
                        <th>Menu's name</th>
                        <th>Price</th>
                        <th>Photo</th>
                        <th>Delete Menu</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($menus as $menu) { ?>
                        <tr>
                            <td><?php echo $menu['id_menu']; ?></td>
                            <td><?php echo $menu['name']; ?></td>
                            <td><?php echo $menu['price']; ?></td>
                            <td> <img src="<?php echo ('data:image/png;base64,' . base64_encode($menu['img'])); ?>" id='img_menu_dashboard'> </img></td>

                            <form action="../php/dashboardUser.php" method="POST">
                                <input type="text" name="ID" hidden value="<?php echo $produkti['id_menu']; ?>"></input>
                                <td><input id="remove" name="btn-remove-menu" type="submit" class="input submit" value="Delete" /></td>
                            </form>


                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="news tables hidden">
            <table class="content-table-users">
                <thead>
                    <tr>
                        <th>ID_Events</th>
                        <th>Title</th>
                        <th>Events</th>
                        <th>Photo</th>
                        <th>Delete Events</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($news as $new) { ?>
                        <tr>
                            <td><?php echo $new['id_events']; ?></td>
                            <td><?php echo $new['title']; ?></td>
                            <td><?php echo $new['events']; ?></td>
                            <td> <img src="<?php echo ('data:image/png;base64,' . base64_encode($new['img'])); ?>" id='img_menu_dashboard'> </img></td>

                            <form action="../php/dashboardUser.php" method="POST">
                                <input type="text" name="ID" hidden value="<?php echo $new['id_eventi']; ?>"></input>
                                <td><input id="remove" name="btn-remove-events" type="submit" class="input submit" value="Delete" /></td>
                            </form>


                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </body>
                        <script src="../dashboard.js"></script>
    </html>
<?php } else {
    header("Location:../index.php");
} ?>