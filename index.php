<?php


if (isset($_GET['action'])) {
    $Action = $_GET['action'];
    $pages = ['About', 'Sale', 'Rent', 'Contact'];
    if (in_array($Action, $pages)) {
        include_once "./Controller/User/" . $Action . ".php";
    } else {
        include_once "./Controller/User/Error404.php";
    }
} else {
    include_once "./Views/User/Home.php";
}