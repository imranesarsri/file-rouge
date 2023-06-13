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
        <div class="part-profile">
            <div class="profail" style="background-image: url(./Views/Assets/img/homme.jpg);"></div>
            <span>
                <?= $_SESSION['Email']; ?>
                <?= $_SESSION['Image_profile']; ?>
            </span>
            <i class="fa-solid icon fa-chevron-down"></i>
        </div>
    </div>
</header>

<?php
$Header = ob_get_clean();

?>