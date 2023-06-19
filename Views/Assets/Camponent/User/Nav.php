<?php
ob_start()
    ?>

<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="./index.php">
            <img src="./Views/Assets/img/logo-dark-1.png" class="logo" alt="">
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
            <div class="align-items-center position-relative ">
                <div class="slid-profail profil d-flex gap-2 align-items-center mt-3 mt-lg-0">
                    <div class="profail" style="background-image: url(./<?= $_SESSION['Image_profile'] ?>)">
                    </div>
                    <span>
                        <?= $_SESSION['Full_name'] ?>
                    </span>
                </div>
                <div class="position-absolute sub-menu-profail slidcardprofaile">
                    <a href="./Profile.php" class="d-flex py-2 gap-4 border-bottom align-items-center profaileBtm">
                        <i class="fa-solid fa-gear"></i>
                        <span>Profile</span>
                    </a>
                    <div class="d-flex py-2 gap-4 border-bottom align-items-center">
                        <form action="" method="post">
                            <button type="submit" class="btnSignOut" name="signOut">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                <span>Sign Out</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            } else {
                ?>
            <form class="d-flex gap-3 align-items-center">
                <a href="./login.php?action=SignIn" class="btn">login</a>
                <a href="./login.php?action=SignUp" class=" text-capitalize blue-button">sign up</a>
            </form>
            <?php
            }
            ?>
        </div>
    </div>
</nav>

<?php
$Nav = ob_get_clean();