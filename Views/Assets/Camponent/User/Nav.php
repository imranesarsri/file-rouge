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
                    <a class="nav-link active text-capitalize" aria-current="page" href="./index.php">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-capitalize " aria-current="page" href="./index.php?action=About">about</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-capitalize" href="./index.php?action=Sale">cars for sale</a>
                        </li>
                        <li><a class="dropdown-item text-capitalize" href="./index.php?action=Rent">cars for rent</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-capitalize" aria-current="page" href="./index.php?action=Contact">contact
                    </a>
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
            <?php
            if (isset($_SESSION['Email'])) {
                ?>
            <div class="position-relative">
                <div class="profail"></div>
                <span>
                    <?= $_SESSION['Email'] ?>
                </span>
                <div class="position-absolute">
                    <span class="d-block border-b-2">Profaile</span>
                    <span class="d-block border-b-2">Sign Out</span>
                </div>
            </div>
            <?php
            } else {
                ?>
            <form class="d-flex gap-3 align-items-center">
                <a href="./login.php?action=SignIn" class="btn">login</a>
                <a href="./dashboard.php" class=" text-capitalize blue-button">sign up</a>
            </form>
            <?php
            }
            ?>
        </div>
    </div>
</nav>

<?php
$Nav = ob_get_clean();