<?php
$method = "post";
$action = "";
$enctype = "multipart/form-data";
$headerSection = "add car";
ob_start();
?>
<div class="row d-flex">
    <?= $massageError ?>
    <div class="col-12 col-lg-6">
        <label class="ps-2" for="Model">Model</label><br>
        <input id="Model" name="Model" type="text" required>
    </div>
    <div class="col-12 col-lg-6">
        <label class="ps-2" for="Brand">Brand</label><br>
        <input id="Brand" name="Brand" type="text" required>
    </div>
    <div class="col-12 col-lg-6">
        <label class="ps-2" for="Color">Color</label><br>
        <input id="Color" name="Color" type="text">
    </div>
    <div class="col-12 col-lg-6">
        <label class="ps-2" for="engineCapacity">engine Capacity</label><br>
        <input id="engineCapacity" name="engineCapacity" type="text" required>
    </div>
    <div class="col-12 col-lg-6">
        <label class="ps-2" for="fuel">Fuel Type</label><br>
        <select name="fuel_type" id="fuel" class="w-100 m-2 py-2 rounded-3" id="fuel" required>
            <option value="gasoline">Gasoline</option>
            <option value="diesel">Diesel</option>
            <option value="electric">Electric</option>
            <option value="hybrid">Hybrid</option>
            <option value="compressed natural gas">Compressed Natural Gas</option>
            <option value="liquefied petroleum gas">Liquefied Petroleum Gas</option>
            <option value="hydrogen">Hydrogen</option>
        </select>
    </div>
    <div class="col-12 col-lg-6">
        <label class="ps-2" for="transmission">Transmission Type</label><br>
        <select name="transmission_type" id="transmission" class="w-100 m-2 py-2 rounded-3" id="transmission">
            <option value="automatic">Automatic</option>
            <option value="manual">Manual</option>
            <option value="continuously variable ">Continuously Variable </option>
            <option value="dual-clutch ">Automatic</option>
            <option value="semi-automatic">Semi-Automatic</option>
            <option value="tiptronic">Tiptronic</option>
            <option value="direct shift gearbox ">Direct Shift Gearbox </option>
        </select>
    </div>
    <div class="col-12 col-lg-6">
        <label class="ps-2" for="Prix">Prix</label><br>
        <input id="Prix" name="Prix" type="number" required>
    </div>
    <div class="col-12 col-lg-6">
        <label class="ps-2" for="Mileage">Mileage</label><br>
        <input id="Mileage" name="Mileage" type="number" required>
    </div>
    <div class="col-12 col-lg-6">
        <label class="ps-2" for="Your">Your</label><br>
        <input id="Your" name="Your" type="date" required>
    </div>
    <div class="col-12 col-lg-6">
        <label class="ps-2" for="type">type</label><br>
        <select name="Type" id="type" class="w-100 m-2 py-2 rounded-3" id="type">
            <option value="buy">Buy</option>
            <option value="rent">Rent</option>
        </select>
    </div>
    <div class="col-12 col-lg-6">
        <label class="ps-2" for="img">main image</label><br>
        <input id="img" name="mianImage" type="file" required>
    </div>
    <div class="col-12 col-lg-6">
        <label class="ps-2" for="imgs">images</label><br>
        <input id="imgs" multiple name="images[]" type="file" required>
    </div>
</div>
<?php

$bodySection = ob_get_clean();
$footerSection = "<button type='submit' name='btnAddCar' class='blue-button'>Add</button>";

include_once "./Views/Admin/layout.php";

?>