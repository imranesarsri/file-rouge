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
}
include_once "./Views/Admin/Details.php";