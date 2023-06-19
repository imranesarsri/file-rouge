<?php

include_once "./Managers/CarsManagement.php";
// Include the 'CarsManagement.php' file that contains the CarsManagement class.

$CarManagement = new CarsManagement();
// Create an instance of the CarsManagement class.

$results = $CarManagement->getAllCarSales();
// Call the getAllCarSales method of the CarsManagement instance to retrieve all cars from the database.


include_once "./Views/Admin/AllCarsSold.php";