<?php
ob_start()
    ?>

<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="./index.php">
            <img src="./Views//Assets/img/logo_light.png" class="logo" alt="">
            <span>Luxe Drive</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active " aria-current="page" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="./index.php?action=About">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="./index.php?action=Sale">cars for sale</a></li>
                        <li><a class="dropdown-item" href="./index.php?action=Rent">Cars for rent</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="./index.php?action=Contact">Contact</a>
                </li>
            </ul>
            <div id="btnDark" class="d-flex text-xl me-5 gap-3 rounded-3 border border-light">
                <div class="sun  px-2 py-1 rounded-start">
                    <i class="fas fa-sun"></i>
                </div>
                <div class="moon  px-2 py-1 rounded-end">
                    <i class="fas fa-moon"></i>
                </div>
            </div>
            <form class="d-flex gap-3 align-items-center">
                <a href="./dashboard.php" class=" btn-blue">Sign In</a>
                <a href="./dashboard.php" class="  blue-button">Sign Up</a>
            </form>
        </div>
    </div>
</nav>

<?php
$Nav = ob_get_clean();