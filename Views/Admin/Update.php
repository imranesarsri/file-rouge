<?php
$method = "post";
$action = "";
$enctype = "";
$headerSection = "Update";
ob_start();
?>
<div class="row d-flex">
    <div class="col-12 col-lg-6">
        <label class="ps-2" for="Model">Model</label><br>
        <input id="Model" value="<?= $resultById->getModel() ?>" name="Model" type="text">
    </div>
    <div class="col-12 col-lg-6">
        <label class="ps-2" for="Brand">Brand</label><br>
        <input id="Brand" value="<?= $resultById->getBrand() ?>" name="Brand" type="text">
    </div>
    <div class="col-12 col-lg-6">
        <label class="ps-2" for="Color">Color</label><br>
        <input id="Color" value="<?= $resultById->getColor() ?>" name="Color" type="text">
    </div>
    <div class="col-12 col-lg-6">
        <label class="ps-2" for="engineCapacity">engine Capacity</label><br>
        <input id="engineCapacity" value="<?= $resultById->getEngine_capacity() ?>" name="engineCapacity" type="number">
    </div>
    <div class="col-12 col-lg-6">
        <label class="ps-2" for="fuel">Fuel Type</label><br>
        <select name="fuel_type" id="fuel" class="w-100 m-2 py-2 rounded-3" id="fuel">
            <option value="<?= $resultById->getFuel_type() ?>"><?= $resultById->getFuel_type() ?>
                <?php
                $selectedFuel = $resultById->getFuel_type();
                $fuels = ['gasoline', 'diesel', 'electric', 'hybrid', 'compressed natural gas', 'liquefied petroleum gas', 'hydrogen'];
                foreach ($fuels as $fuel) {
                    if ($fuel !== $selectedFuel) {
                        echo '<option value="' . $fuel . '">' . $fuel . '</option>';
                    }
                }
                ?>

        </select>
    </div>
    <div class="col-12 col-lg-6">
        <label class="ps-2" for="transmission">Transmission Type</label><br>
        <select name="transmission_type" id="transmission" class="w-100 m-2 py-2 rounded-3" id="transmission">


            <option value="<?= $resultById->getTransmission_type() ?>">
                <?= $resultById->getTransmission_type() ?>
                <?php
                $selectedTransmission = $resultById->getTransmission_type();
                $transmissions = ['automatic', 'manual', 'continuously variable', 'dual-clutch', 'semi-automatic', 'tiptronic', 'direct shift gearbox'];
                foreach ($transmissions as $transmission) {
                    if ($transmission !== $selectedTransmission) {
                        echo '<option value="' . $transmission . '">' . $transmission . '</option>';
                    }
                }
                ?>
        </select>
    </div>
    <div class="col-12 col-lg-6">
        <label class="ps-2" for="Price">Price</label><br>
        <input id="Price" name="Price" value="<?= $resultById->getPrice() ?>" type="number">
    </div>
    <div class="col-12 col-lg-6">
        <label class="ps-2" for="mileage">Mileage</label><br>
        <input id="mileage" name="mileage" value="<?= $resultById->getMileage() ?>" type="text">
    </div>
    <div class="col-12 col-lg-6">
        <label class="ps-2" for="Year">Year</label><br>
        <input id="Year" name="Year" value="<?= $resultById->getYear() ?>" type="text">
    </div>
    <div class="col-12 col-lg-6 ">
        <label class="ps-2" for="type">type</label><br>
        <select name="Type" id="type" class="w-100 m-2 py-2 rounded-3" id="type">
            <option value="<?= $resultById->getType() ?>"><?= $resultById->getType() ?>
                <?php
                $selectedType = $resultById->getType();
                $types = ['buy', 'rent'];
                foreach ($types as $type) {
                    if ($type !== $selectedType) {
                        echo '<option value="' . $type . '">' . $type . '</option>';
                    }
                }
                ?>
        </select>
    </div>
    <div class="col-12 ">
        <label class="ps-2" for="status">Status</label><br>
        <select name="status" id="status" class="w-100 m-2 py-2 rounded-3" id="status">
            <option value="<?= $resultById->getStatus() ?>"><?= $resultById->getStatus() ?>
                <?php
                $selectedStatus = $resultById->getStatus();
                $status = ['available', 'reserved', 'sold', 'rented'];
                foreach ($status as $type) {
                    if ($type !== $selectedStatus) {
                        echo '<option value="' . $type . '">' . $type . '</option>';
                    }
                }
                ?>
        </select>
    </div>
    <div class="col-12 col-lg-6">
        <label class="ps-2 my-2">main image</label><br>
        <img src="<?= $resultById->getMain_img() ?>" class="m-2" alt="">
        <label class="ps-2" for="img">change main image</label>
        <input id="img" name="mianImage" type="file">
    </div>
    <div class="col-12 col-lg-6">
        <label class="ps-2 my-2">images</label><br>
        <div class="row d-flex m-2">
            <?php
            foreach ($resultsImgs as $resultsImg) {
                ?>
                <div class="col-12 col-md-6 col-xl-4 mb-4">
                    <div class="position-relative">
                        <img src="<?= $resultsImg->getImage_url() ?>" value="<?= $resultsImg->getImage_id_car() ?>"
                            class="m-2" alt="">
                        <div class=" position-absolute inputDelete top-0 start-0">
                            <input type="checkbox" class="m-0 border-0">
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <label class="ps-2 my-2" for="imgs">You can add 6 images</label><br>
        <input id="imgs" multiple name="images[]" type="file">
    </div>

</div>
<?php
$bodySection = ob_get_clean();
$footerSection = "<button type='submit' name='btnUpdate' class='blue-button'>Update</button>";

include_once "./Views/Admin/layout.php";

?>