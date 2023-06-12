<?php

if (isset($_GET['action'])) {
    $Action = $_GET['action'];
    $pages = ['Add', 'Rented', 'Rent', 'Reservation', 'Sale', 'Sold', 'Dashboard', 'Details', 'Delete', 'Update'];
    if (in_array($Action, $pages)) {
        include_once "./Controller/Admin/" . $Action . ".php";
    } else {
        include_once "./Controller/Admin/Error404.php";
    }
} else {
    include_once "./Controller/Admin/Dashboard.php";
}