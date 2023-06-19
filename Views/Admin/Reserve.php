<?php
$method = "post";
$action = "";
$enctype = "";
$headerSection = "Active Reservation";
ob_start();
?>
<div class="row ">
    <?php
    foreach ($results as $result) {
        ?>

        <div class="col-12 col-lg-6 my-3 cardReservation">
            <div>
                <div class="d-flex justify-content-between">
                    <div>
                        <div>
                            <div>
                                <div>
                                    <p class="fw-bold">reservation date :
                                        <?= $result->getDate_reservation() ?>
                                    </p>
                                </div>
                                <div>
                                    <img src="<?= $result->getClient_image_profile() ?>" class="img-table" alt="">
                                </div>

                            </div>
                        </div>
                        <div class="p-2">
                            <span class="d-block p-1">name :
                                <?= $result->getClient_full_name() ?>
                            </span>
                            <span class="d-block p-1">Eamil :
                                <?= $result->getClient_email() ?>
                            </span>
                            <span class="d-block p-1">Phone Number :
                                <?= $result->getClient_phone_number() ?>
                            </span>
                            <span class="d-block p-1">points :
                                <?= $result->getClient_CIN() ?>
                            </span>
                            <a href="./dashboard.php?action=profileUser&id_client=<?= $result->getId_client() ?>"
                                class="d-block my-2">
                                profile
                                <i class="fa-solid fa-arrow-trend-up"></i>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <p class="fw-bold">Reservation end date :
                                <?= $result->getDate_end_reservation() ?>
                            </p>
                        </div>
                        <div>
                            <div>
                                <img src="<?= $result->getCar_image_url() ?>" class="img-table" alt="">
                            </div>
                        </div>
                        <div class="p-2">
                            <span class="d-block p-1">Brand :
                                <?= $result->getCar_brand() ?>
                            </span>
                            <span class="d-block p-1">Model :
                                <?= $result->getCar_model() ?>
                            </span>
                            <span class="d-block p-1">Price :
                                <?= $result->getCar_price() ?>
                            </span>
                            <a href="./dashboard.php?action=Details&id_car=<?= $result->getCar_id() ?>"
                                class="d-block my-2">
                                Details this car
                                <i class="fa-solid fa-arrow-trend-up"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-between">
                    <a href="./Dashboard.php?action=AddSeled&car_id=<?= $result->getCar_id() ?>&id_client=<?= $result->getId_client() ?>&id_reservation=<?= $result->getId_reservation() ?>"
                        class="btn-blue col-5 mb-2 text-center">Seled
                    </a>
                    <a href="./Dashboard.php?action=Deduct&car_id=<?= $result->getCar_id() ?>&id_client=<?= $result->getId_client() ?>&id_reservation=<?= $result->getId_reservation() ?>"
                        class="btn-red col-5 mb-2 text-center">Deduct
                    </a>
                    <a href="./Dashboard.php?action=Ban&car_id=<?= $result->getCar_id() ?>&id_client=<?= $result->getId_client() ?>&id_reservation=<?= $result->getId_reservation() ?>"
                        class="btn-red col-5 mb-2 text-center">Ban
                    </a>
                    <a href="./Dashboard.php?action=cancelReservation&id_reservation=<?= $result->getId_reservation() ?>&link=Reserve"
                        class="btn-success col-5 mb-2 text-center">Cancel
                    </a>
                </div>
            </div>
        </div>
        <!-- (isset($_GET['car_id']) && isset($_GET['id_client'])) -->

        <?php
    }
    ?>
</div>
<?php
$bodySection = ob_get_clean();
$footerSection = "<button class='blue-button'>Add</button>";

include_once "./Views/Admin/layout.php";

?>