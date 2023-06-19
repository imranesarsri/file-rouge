<?php

if (isset($_GET['action'])) {
    // Get the value of the 'action' parameter from the URL
    $Action = $_GET['action'];

    // Define an array of valid pages/actions
    $pages = ['SignIn', 'SignUp'];

    // Check if the requested action is in the list of valid pages
    if (in_array($Action, $pages)) {
        // Include the corresponding controller file based on the requested action
        include_once "./Controller/Login/" . $Action . ".php";
    } else {
        // If the requested action is not valid, include the error page
        include_once "./Controller/Login/Error404.php";
    }
} else {
    // If no action is specified, include the default sign-in page
    include_once "./Views/Login/SignIn.php";
}