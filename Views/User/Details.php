<?php
ob_start();
?>
<div class="row">
    <div class="container col-xl-8">
        <div class="mySlides mb-5">
            <div class="numbertext">1 /
                <?= $countAllImages->getCount() ?>
            </div>
            <img src="<?= $resultById->getMain_img() ?>">
        </div>
        <?php
        foreach ($resultsImgs as $resultsImg) {
            ?>
            <div class="mySlides mb-5">
                <?php
                ?>
                <div class="numbertext"> 2 /
                    <?= $countAllImages->getCount() ?>
                </div>
                <img src="<?= $resultsImg->getImage_url() ?>" id="sdd" value="<?= $resultsImg->getImage_id_car() ?>">
            </div>
            <?php
        }
        ?>

        <a class="prev" onclick="plusSlides(-1)"><i class="fa-solid fa-angles-left"></i></a>
        <a class="next" onclick="plusSlides(1)"><i class="fa-solid fa-angles-right"></i></a>

        <div class="d-flex gap-2 sliderImg">
            <?php
            foreach ($resultsImgs as $resultsImg) {
                ?>
                <div class="imageslider">
                    <img class="demo cursor" src="<?= $resultsImg->getImage_url() ?>"
                        value="<?= $resultsImg->getImage_id_car() ?>" onclick="currentSlide(2)" alt="">
                </div>
                <?php
            }
            ?>


        </div>
    </div>
    <div class="col-xl-4  mt-5 mt-lg-0 single-car-data">
        <div class=" d-flex align-items-center ">
            <span class="fs-5 fw-bold w-50">Model</span>
            <span class="w-50">
                <?= $resultById->getModel() ?>
            </span>
        </div>
        <div class=" d-flex align-items-center ">
            <span class="fs-5 fw-bold w-50">Type</span>
            <span class="w-50">
                <?= $resultById->getType() ?>
            </span>
        </div>
        <div class=" d-flex align-items-center ">
            <span class="fs-5 fw-bold w-50">Year</span>
            <span class="w-50">
                <?= $resultById->getYear() ?>
            </span>
        </div>
        <div class=" d-flex align-items-center ">
            <span class="fs-5 fw-bold w-50">Color</span>
            <span class="w-50">
                <?= $resultById->getColor() ?>
            </span>
        </div>
        <div class=" d-flex align-items-center ">
            <span class="fs-5 fw-bold w-50">Brand</span>
            <span class="w-50">
                <?= $resultById->getBrand() ?>
            </span>
        </div>
        <div class=" d-flex align-items-center ">
            <span class="fs-5 fw-bold w-50">Mileage</span>
            <span class="w-50">
                <?= $resultById->getMileage() ?>
            </span>
        </div>
        <div class=" d-flex align-items-center ">
            <span class="fs-5 fw-bold w-50">Status</span>
            <span class="w-50">
                <?= $resultById->getStatus() ?>
            </span>
        </div>
        <div class=" d-flex align-items-center ">
            <span class="fs-5 fw-bold w-50">Engine Capacity</span> L
            <span class="w-50">
                <?= $resultById->getEngine_capacity() ?>
            </span>
        </div>
        <div class=" d-flex align-items-center ">
            <span class="fs-5 fw-bold w-50">Transmission</span>
            <span class="w-50">
                <?= $resultById->getTransmission_type() ?>
            </span>
        </div>
        <div class=" d-flex align-items-center ">
            <span class="fs-5 fw-bold w-50">Fuel</span>
            <span class="w-50">
                <?= $resultById->getFuel_type() ?>
            </span>
        </div>
        <div class=" d-flex align-items-center ">
            <span class="fs-5 fw-bold w-50">Price</span>
            <span class="w-50 fw-bold">
                <?= $resultById->getPrice() ?>
            </span>
        </div>
    </div>
</div>

<?php
$Content = ob_get_clean();

include_once "./Views/User/layout.php";