<?php
include_once "./Managers/CarsManagement.php";
$CarManagement = new CarsManagement();
$results = $CarManagement->getAllByType('Buy');


include_once "./Views/Admin/Sale.php";