<header>
    <nav>
        <div>
            <a href="index.php">  </a>
        </div>
        <div class="navLeft">
            <ul class="nav_links">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="about.php">About</a>
                </li>
                <li>
                    <a href="menu.php">Menu</a>
                </li>
                <li>
                    <a href="events.php">Event</a>
                </li>
                <li>
                    <a href="reservation.php">Reservation</a>
                </li>
            </ul>
        </div>
        <div class="navRight">
    <ul class="nav_buttons">
        <li><a href="./views/login.php" class="btn" id="btn_kyqu">Log in</a></li>
        <?php
        session_start();
        if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
        ?>
            <li><a href="./views/dashboard.php" class="btn" id="btn_logout">Dashboard</a></li>
            <li><a href="php/logout.php" class="btn" id="btn_logout">Log out</a></li>
        <?php
        } else if (isset($_SESSION['role']) && $_SESSION['role'] == 0) {
        ?>
            <li><a href="php/logout.php" class="btn" id="btn_logout">Log out</a></li>
        <?php
        }
        ?>
    </ul>
</div>

                
             

            </ul>
        </div>
    </nav>

</header>