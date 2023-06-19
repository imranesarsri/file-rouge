<?php
ob_start();
$counter = 1;
?>
<div class="row container mx-auto">
    <h3 class="my-5 fw-bold ">Details car :</h3>
    <div class="container col-xl-8">
        <div class="mySlides mb-5">
            <div class="numbertext">
                <?= $counter++ ?> /
                <?= $countAllImages->getCount() ?>
            </div>
            <img src="<?= $resultById->getMain_img() ?> ">
        </div>
        <?php
        foreach ($resultsImgs as $resultsImg) {
            ?>
        <div class="mySlides mb-5">
            <?php
                ?>
            <div class="numbertext">
                <?= $counter++ ?> /
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
                    value="<?= $resultsImg->getImage_id_car() ?>"
                    onclick="currentSlide(<?= ($counter++) - $countAllImages->getCount() ?>)" alt="">
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
<div class="row container mx-auto">
    <h3 class="my-5 fw-bold ">Conditions for Car Reservation :</h3>
    <ol>
        <li>
            <p>Only one car can be reserved at a time. Once the reservation period ends, you can reserve another
                car.
            </p>
        </li>
        <li>
            <p>Direct reservation of a car is allowed for a 24-hour period without the need for administrator
                approval.
                If you wish to reserve for a longer duration, the request will be forwarded to the administrator who
                will decide whether to accept or reject the reservation.</p>
        </li>
        <li>
            <p>If the car purchase is completed during the reservation period, the customer will earn points that
                can be
                used for discounts on future reservations or purchases.</p>
        </li>
        <li>
            <p>If the reservation expires without completing the car purchase, there are three scenarios:</p>
            <ol type="a">
                <li>
                    <p>If the customer visits to inspect the car but the sale does not take place, or if the
                        customer
                        cannot visit but provides a valid reason to the administrator, no points will be deducted or
                        added.</p>
                </li>
                <li>
                    <p>If the reservation period ends without the customer providing a valid reason for not
                        completing
                        the purchase, one point will be deducted.</p>
                </li>
                <li>
                    <p>If a customer engages in inappropriate behavior towards employees or other customers, such as
                        verbal or racist abuse, he or she will be permanently removed from the site.</p>
                </li>
            </ol>
        </li>
        <li>
            <p>In the end, each customer has 0 points, and if it drops to -5 points, he will be attended, and the
                higher
                the customer’s points, the greater discounts he will get in prices and the longer the reservation
                period.</p>
        </li>
    </ol>
    <form action="./index.php?action=Reservation" method="post"
        class="my-3 row reserv p-2 d-flex row border-2 align-items-center">
        <div class="col">
            <label for="date">If you want more than 24 hours, fill in this field .

            </label>
            <input name="date" type="date" id="date">
        </div>
        <div class="col mt-4">
            <button name="Reservation" value="<?= $resultById->getCar_id() ?>"
                class="blue-button col">Reservation</button>

        </div>
    </form>
</div>

<?php
$Content = ob_get_clean();

include_once "./Views/User/layout.php";