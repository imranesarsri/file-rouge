<?php

if (isset($_GET['action'])) {
    // Get the value of the 'action' parameter from the URL
    $Action = $_GET['action'];

    // Define an array of valid pages/actions
    $pages = ['Add', 'Reservation', 'AllCars', 'Dashboard', 'Details', 'Delete', 'Update', 'AddUser', 'AddAdmin', 'AllUsers', 'AllAdmins', 'ActiveReservations', 'AllCarsSold', 'Reserve', 'profileUser', 'AcceptReservation', 'cancelReservation', 'AddSeled', 'Deduct', 'Ban'];

    // Check if the requested action is in the list of valid pages
    if (in_array($Action, $pages)) {
        // Include the corresponding controller file based on the requested action
        include_once "./Controller/Admin/" . $Action . ".php";
    } else {
        // If the requested action is not valid, include the error page
        include_once "./Controller/Admin/Error404.php";
    }
} else {
    // If no action is specified, include the default dashboard page
    include_once "./Controller/Admin/Dashboard.php";
}