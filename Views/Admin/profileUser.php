<?php

if ($_GET['id_client']) {
    include_once "./Managers/CLientsManagement.php";
    $CLientsManagement = new CLientsManagement();
    $client = $CLientsManagement->gitClientById($_GET['id_client']);

    $method = "post";
    $action = "";
    $enctype = "";
    $headerSection = "Profile";
    ob_start();
    ?>
<div class="container mt-5">
    <div class="row mb-3 bord">
        <div class="col ">
            <div>
                <img src="<?= $client->getImage_profile() ?>" style="width: 100px;" alt="">
            </div>
        </div>
        <div class="col">
            <span class="d-block">Full Name :
                <?= $client->getFull_name() ?>
            </span>
            <span class="d-block">Email :
                <?= $client->getEmail() ?>
            </span>
            <span class="d-block">Phone Number :
                <?= $client->getPhone_number() ?>
            </span>
            <span class="d-block">CIN :
                <?= $client->getCIN() ?>
            </span>
            <span class="d-block">Points :
                <?= $client->getPoints() ?>
            </span>
        </div>
    </div>
    <div class="row gap-3">
        <div class="col bord ">
            reseration :
        </div>
        <div class="col bord">render :</div>
    </div>
</div>

<?php
    $bodySection = ob_get_clean();
    $footerSection = "<button class='blue-button'>Add</button>";
} else {
    header("Location:./dashboard.php");
}
include_once "./Views/Admin/layout.php";

?>