<?php


if (isset($_GET['action'])) {
    $Action = $_GET['action'];
    $pages = ['SignIn', 'SignUp'];
    if (in_array($Action, $pages)) {
        include_once "./Controller/Login/" . $Action . ".php";
    } else {
        include_once "./Controller/Login/Error404.php";
    }
} else {
    include_once "./Views/Login/SignIn.php";
}