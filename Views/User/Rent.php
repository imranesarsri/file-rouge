<?php

ob_start();
?>


<div class="row container-md mx-auto my-5">
    <div class="col-xl-3 mb-3">
        <form action="" method="post">
            <div class="cardSherch p-3">
                <div class="partPrice pb-3">
                    <label for="price">What price would you like</label>
                    <input type="number" name="price" id="price" placeholder="Enter the price">
                </div>
                <div class="mt-3 ">
                    <h5 class="d-block ">Brand</h5>
                    <div class="partFilter">
                        <div>
                            <?php foreach ($Brands as $Brand) { ?>
                            <div class="d-flex gap-5 py-2">
                                <input type="checkbox" id="<?= $Brand ?>" name="brands[]" value="<?= $Brand ?>">
                                <label for="<?= $Brand ?>"><?= $Brand ?></label>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="mt-3 ">
                    <h5 class="d-block ">Year</h5>
                    <div class="partFilter">
                        <div>
                            <?php foreach ($Years as $Year) { ?>
                            <div class="d-flex gap-5 py-2">
                                <input type="checkbox" id="<?= $Year ?>" name="Years[]" value="<?= $Year ?>">
                                <label for="<?= $Year ?>"><?= $Year ?></label>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="mt-3 ">
                    <h5 class="d-block ">Color</h5>
                    <div class="partFilter">
                        <div>
                            <?php foreach ($Colors as $Color) { ?>
                            <div class="d-flex gap-5 py-2">
                                <input type="checkbox" id="<?= $Color ?>" name="Colors[]" value="<?= $Color ?>">
                                <label for="<?= $Color ?>"><?= $Color ?></label>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="mt-3 ">
                    <h5 class="d-block ">Fuel type</h5>
                    <div class="partFilter">
                        <div>
                            <?php foreach ($Fuels as $Fuel) { ?>
                            <div class="d-flex gap-5 py-2">
                                <input type="checkbox" id="<?= $Fuel ?>" name="Fuels[]" value="<?= $Fuel ?>">
                                <label for="<?= $Fuel ?>"><?= $Fuel ?></label>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="mt-3 ">
                    <h5 class="d-block ">Transimissin type</h5>
                    <div class="partFilter">
                        <div>
                            <?php foreach ($Transmissions as $Transmission) { ?>
                            <div class="d-flex gap-5 py-2">
                                <input type="checkbox" id="<?= $Transmission ?>" name="Transmissions[]"
                                    value="<?= $Transmission ?>">
                                <label for="<?= $Transmission ?>"><?= $Transmission ?></label>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <button type="submit" class="button blue-button " name="btnSherch">sherch</button>
            </div>
        </form>
    </div>
    <div class="col-xl-9">
        <div class="d-flex row g-4 justify-content-center">
            <?php
            foreach ($results as $result) {
                ?>
            <div class="col-xxl-4 col-xl-6 col-lg-4 col-md-6">
                <div class="card p-2">
                    <a class="d-block" href="./index.php?action=Details&id_car=<?= $result->getCar_id()?>">
                        <img src="<?= $result->getMain_img() ?>" class="card-img-top position-relative" alt="...">
                    </a>
                    <div class="stm-badge-dealer">
                        <?= $result->getStatus() ?></div>
                    <div class="card-body  px-2">
                        <h5 class="card-prix text-center ">
                            <?= $result->getPrice() ?>
                        </h5>
                        <h5 class="card-date py-1 px-3 text-muted">
                            <?= $result->getYear() ?>
                        </h5>
                        <h5 class="card-title my-3 fw-semibold "><a
                                href="./index.php?action=Details&id_car=<?= $result->getCar_id()?>"><?= $result->getBrand() . " " . $result->getModel() ?></a>
                        </h5>
                        <a href="./index.php?action=Details&id_car=<?= $result->getCar_id()?>" class=" text-muted">
                            <span class="meta-content">transmission : </span>
                            <span class="">
                                <?= abbreviateTransmission($result->getTransmission_type()) ?>
                            </span>
                        </a>
                        <span class="m-1">
                            <hr>
                        </span>
                        <a href="./index.php?action=Details&id_car=<?= $result->getCar_id()?>"
                            class="card-feature-box d-flex justify-content-between flex-wrap  align-items-center mb-4">
                            <div class=" d-flex align-items-center  pe-2 py-2">
                                <i class="fa-solid fa-gas-pump me-2"></i>
                                <span>
                                    <?= $result->getMileage() ?>Km
                                </span>
                            </div>
                            <div class=" d-flex align-items-center border-start border-2 px-2 border-secondary-subtle">
                                <i class="fa-solid fa-broom me-2"></i>
                                <span>
                                    <?= abbreviateFuel($result->getFuel_type()) ?>
                                </span>
                            </div>
                            <div class=" d-flex align-items-center border-start border-2 ps-2 border-secondary-subtle">
                                <i class="fa-solid fa-gauge me-2"></i>
                                <span>
                                    <?= $result->getEngine_capacity() ?>L
                                </span>
                            </div>
                        </a>
                        <div class="w-100">
                            <a href="./index.php?action=Details&id_car=<?= $result->getCar_id()?>"
                                class="btn-details d-block text-center">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php
$Content = ob_get_clean();

include_once "./Views/User/layout.php";