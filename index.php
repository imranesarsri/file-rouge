<?php


if (isset($_GET['action'])) {
    // Get the value of the 'action' parameter from the URL
    $Action = $_GET['action'];

    // Define an array of valid pages/actions
    $pages = ['About', 'Contact', 'Details', 'Reservation'];

    // Check if the requested action is in the list of valid pages
    if (in_array($Action, $pages)) {
        // Include the corresponding controller file based on the requested action
        include_once "./Controller/User/" . $Action . ".php";
    } else {
        // If the requested action is not valid, include the error page
        include_once "./Controller/User/Error404.php";
    }
} else {
    // If no action is specified, include the default home page
    include_once "./Controller/User/Home.php";
}