<?php
ob_start();
?>
<nav>
    <div class="sidenav">
        <a href="./dashboard.php" class="logo">
            <img src="./Views/Assets/img/logo1.png" class="logo" alt="">
            <span class="first-title">Luxe </span>
            <span class="last-title"> Drive</span>
        </a>
    </div>
    <div class="sidemenu">
        <div class="item active">
            <div>
                <a href="./dashboard.php">
                    <i class="fa-solid fa-house"></i>
                    <span>Dashboard</span>
                </a>
            </div>
        </div>
        <div class="item">
            <div class="slide-btn">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>Prodact</span>
                <i id="icon" class="fa-solid fa-angle-up"></i>
            </div>
            <div class="sub-menu">
                <a href="./dashboard.php?action=Add">Add car</a>
                <a href="./dashboard.php?action=AllCars">All Cars</a>
            </div>
        </div>
        <div class="item">
            <div class="slide-btn">
                <i class="fa-solid fa-users"></i>
                <span>User</span>
                <i id="icon" class="fa-solid fa-angle-up"></i>
            </div>
            <div class="sub-menu">
                <a href="./dashboard.php?action=AddUser">Add User</a>
                <a href="./dashboard.php?action=AddAdmin">Add Admin</a>
                <a href="./dashboard.php?action=AllUsers">All Users</a>
                <a href="./dashboard.php?action=AllAdmins">All Admin</a>
            </div>
        </div>
        <div class="item">
            <div class="slide-btn">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>Reservation</span>
                <i id="icon" class="fa-solid fa-angle-up"></i>
            </div>
            <div class="sub-menu">
                <a href="./dashboard.php?action=ActiveReservations">Active Reservations</a>
                <a href="./dashboard.php?action=AllCarsSold">All Cars Sold</a>
                <a href="./dashboard.php?action=Reserve">Reserve</a>
            </div>
        </div>
    </div>
</nav>
<?php
$Nav = ob_get_clean();