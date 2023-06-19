<?php
include_once "./Managers/carsManagement.php";
include_once "./Managers/ImagesManagement.php";

if (isset($_GET['id_car'])) {
    $id = $_GET['id_car'];

    $CarManagement = new CarsManagement();
    $resultById = $CarManagement->getDataById($id);
    // Get car data by its ID using the getDataById method of the CarsManagement class.

    $ImageManagement = new ImagesManagement();
    $resultsImgs = $ImageManagement->getSecondaryImages($id);
    // Get secondary images of the car using the getSecondaryImages method of the ImagesManagement class.

    $countAllImages = $ImageManagement->countAllImages($id);
    // Count the total number of images for the car using the countAllImages method of the ImagesManagement class.
}

include_once "./Views/User/Details.php";
// Include the "Details.php" file to display the car details.