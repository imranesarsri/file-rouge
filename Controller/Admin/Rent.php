<?php
include_once "./Managers/CarsManagement.php";
$CarManagement = new CarsManagement();
$results = $CarManagement->getAllByType('Rent');

include_once "./Views/Admin/Rent.php";