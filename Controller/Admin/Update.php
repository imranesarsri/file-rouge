<?php
include_once "./Managers/carsManagement.php";
include_once "./Managers/ImagesManagement.php";
if (isset($_GET['id_car'])) {
    $id = $_GET['id_car'];
    $CarManagement = new CarsManagement();
    $resultById = $CarManagement->getDataById($id);

    $ImageManagement = new ImagesManagement();
    $resultsImgs = $ImageManagement->getSecondaryImages($id);
    $countAllImages = $ImageManagement->countAllImages($id);

    if (isset($_POST['btnUpdate'])) {
        $Model = $_POST['Model'];
        $Brand = $_POST['Brand'];
        $Color = $_POST['Color'];
        $Engine_Capacity = $_POST['engineCapacity'];
        $Type = $_POST['Type'];
        $Year = $_POST['Year'];
        $Mileage = $_POST['mileage'];
        $Price = $_POST['Price'];
        $Transmission_Type = $_POST['transmission_type'];
        $Fuel_type = $_POST['fuel_type'];
        $Status = $_POST['status'];
        $UpdateCar = new CarsManagement();
        $UpdateCar->Update($id, $Model, $Type, $Year, $Price, $Color, $Brand, $Fuel_type, $Transmission_Type, $Mileage, $Status, $Engine_Capacity);

    }
}
include_once "./Views/Admin/Update.php";