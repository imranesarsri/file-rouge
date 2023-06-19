<?php
ob_start();
?>

<header>
    <div class="part-menu">
        <i class="fa-solid icon fa-bars"></i>
    </div>
    <div class="part-information">
        <div id="btnDark">
            <i class=" fa-solid icon fa-sun"></i>
            <!-- <i class="fa-solid icon fa-moon"></i> -->
        </div>
        <div class="messeg">
            <i class="fa-solid icon fa-envelope"></i>
        </div>
        <div class="notification">
            <i class="fa-solid icon fa-bell"></i>
        </div>
        <div class="align-items-center position-relative part-profile">
            <div class="slid-profail profil d-flex gap-2 align-items-center mt-3 mt-lg-0">
                <div class="profail" style="background-image: url(./<?= $_SESSION['Image_profile'] ?>);">
                </div>
                <span>
                    <?= $_SESSION['Full_name'] ?>
                </span>
                <i class="fa-solid icon fa-chevron-down"></i>

            </div>
            <div class="position-absolute sub-menu-profail slidcardprofaile">
                <div class="d-flex py-2 gap-4 border-bottom align-items-center profaileBtm">
                    <i class="fa-solid fa-gear"></i>
                    <span>Profile</span>
                </div>
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
    </div>
</header>

<?php
$Header = ob_get_clean();

?>