
<header>
            <a href="#home" class="logo"><i class="ri-restaurant-2-fill"></i><span>Bueno Bistro</span></a>
                    <ul class="navbar">
                        <li><a href="#home" class="bar-item-btn">Home</a></li> 
                        <li><a href="#about" >About </a></li>
                        <li><a href="#menu" >Menu</a></li>
                        <li><a href="#events">Events</a></li>
                        <li><a href="#reservation">Reservation</a></li>
                    </ul>
                    <div class="main">
                    
                        <div class="bx bx-menu" id="menu-icon"><i class="ri-menu-line"></i></div>
                    </div>
                


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

                <?php
                if (!(isset($_SESSION['role']))) {
                ?>
                    <li><a href="./views/login.php" class="btn" id="btn_kyqu">Kyqu</a></li>
                <?php
                }
                ?>

            </ul>
        </div>
    </nav>

</header>