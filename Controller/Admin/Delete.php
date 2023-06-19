<?php
include_once "./Managers/CarsManagement.php";
// Include the 'CarsManagement.php' file that contains the CarsManagement class.

if (isset($_GET['id_car'])) {
    // Check if the 'id_car' parameter is set in the URL.

    $delete = new CarsManagement();
    // Create an instance of the CarsManagement class.

    $delete->deleteCar($_GET['id_car']);
    // Call the deleteCar method of the CarsManagement instance with the 'id_car' parameter to delete the car.

    header('location:./dashboard.php?action=AllCars');
    // Redirect the user to the dashboard.php page with the 'action' parameter set to 'AllCars'.
}