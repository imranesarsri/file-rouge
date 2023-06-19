<?php
include_once "./Managers/carsManagement.php";
include_once "./Managers/ImagesManagement.php";
// Include the 'carsManagement.php' and 'ImagesManagement.php' files.

if (isset($_GET['id_car'])) {
    $id = $_GET['id_car'];
    // Get the 'id_car' parameter from the GET request.

    $CarManagement = new CarsManagement();
    // Create an instance of the CarsManagement class.

    $resultById = $CarManagement->getDataById($id);
    // Call the getDataById method of the CarsManagement instance to retrieve data for the specified car ID.

    $ImageManagement = new ImagesManagement();
    // Create an instance of the ImagesManagement class.

    $resultsImgs = $ImageManagement->getSecondaryImages($id);
    // Call the getSecondaryImages method of the ImagesManagement instance to retrieve secondary images for the car.

    $countAllImages = $ImageManagement->countAllImages($id);
    // Call the countAllImages method of the ImagesManagement instance to get the count of all images for the car.

    if (isset($_POST['btnUpdate'])) {
        $Model = $_POST['Model'];
        $Brand = $_POST['Brand'];
        $Color = $_POST['Color'];
        $Engine_Capacity = $_POST['engineCapacity'];
        $Year = $_POST['Year'];
        $Mileage = $_POST['mileage'];
        $Price = $_POST['Price'];
        $Transmission_Type = $_POST['transmission_type'];
        $Fuel_type = $_POST['fuel_type'];
        $Status = $_POST['status'];
        // Get the updated values from the submitted form.

        $UpdateCar = new CarsManagement();
        // Create a new instance of the CarsManagement class.

        $UpdateCar->Update($id, $Model, $Year, $Price, $Color, $Brand, $Fuel_type, $Transmission_Type, $Mileage, $Status, $Engine_Capacity);
        // Call the Update method of the CarsManagement instance to update the car's information.

    }
}

include_once "./Views/Admin/Update.php";
// Include the "Update.php" file to display the car update form.