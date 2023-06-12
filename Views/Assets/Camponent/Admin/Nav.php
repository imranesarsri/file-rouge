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
                <a href="./dashboard.php?action=Sale">Cars for Sale</a>
                <a href="./dashboard.php?action=Rent">Cars for Rent</a>
                <a href="./dashboard.php?action=Sold">Sold Cars</a>
                <a href="./dashboard.php?action=Rented">Rented Cars</a>
                <a href="./dashboard.php?action=Reservation">Reservation</a>
            </div>
        </div>
        <div class="item">
            <div class="slide-btn">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>Prodact</span>
                <i id="icon" class="fa-solid fa-angle-up"></i>
            </div>
            <div class="sub-menu">
                <a href="">Add</a>
                <a href="">All prodact</a>
                <a href="">Add</a>
            </div>
        </div>
        <div class="item">
            <div class="slide-btn">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>Prodact</span>
                <i id="icon" class="fa-solid fa-angle-up"></i>
            </div>
            <div class="sub-menu">
                <a href="">Add</a>
                <a href="">All prodact</a>
                <a href="">Add</a>
            </div>
        </div>
    </div>
</nav>
<?php
$Nav = ob_get_clean();