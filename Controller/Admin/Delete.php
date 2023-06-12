<?php
include_once "./Managers/carsManagement.php";

if (isset($_GET['id_car'])) {
    $delete = new CarsManagement();
    $delete->deleteCar($_GET['id_car']);
    $type = $_GET['type'];
    if ($type == "buy" || $type == "Buy") {
        header('location:././dashboard.php?action=Sale');
    } else {
        header('location:././dashboard.php?action=Rent');
    }

}