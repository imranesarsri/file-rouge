<?php
session_start();
include_once "./Views/Assets/Camponent/User/Nav.php";
include_once "./Views/Assets/Camponent/User/Footer.php";
include_once "./Views/Assets/Camponent/User/Form.php";
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Views/Assets/Css/all.min.css">
    <link rel="stylesheet" href="./Views/Assets/Css/bootstrap.min.css">
    <link rel="stylesheet" href="./Views/Assets/Css/User/style.css">
    <script src="./Views/Assets/Js/all.min.js"></script>
    <script src="./Views/Assets/Js/bootstrap.bundle.min.js"></script>
    <script src="./Views/Assets/Js/jquery.js"></script>

</head>

<body class="dark">
    <?= $Nav ?>
    <?= $Content ?>
    <?= $Footer ?>

    <script src="./Views/Assets/Js/User/main.js"></script>
    <script src="./Views/Assets/Js/darkMode.js"></script>

</body>

</html>