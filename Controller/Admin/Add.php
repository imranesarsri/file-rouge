<?php

$massageError = "";

if (isset($_POST['btnAddCar'])) {
    $mainImage = $_FILES['mianImage'];
    $mainImg_name = $mainImage['name'];
    $mainImg_temp = $mainImage['tmp_name'];
    $images = $_FILES['images'];
    $images_name = $images['name'];
    $images_temp = $images['tmp_name'];
    $Model = $_POST['Model'];
    $Brand = $_POST['Brand'];
    $Color = $_POST['Color'];
    $engineCapacity = $_POST['engineCapacity'];
    $Prix = $_POST['Prix'];
    $Mileage = $_POST['Mileage'];
    $Your = $_POST['Your'];
    $Type = $_POST['Type'];
    $fuel_type = $_POST['fuel_type'];
    $transmission_type = $_POST['transmission_type'];
    $imagesUrl = [];
    include_once "./Managers/carsManagement.php";
    include_once "./Managers/ImagesManagement.php";


    $validation = new ImagesManagement();
    $validation->validateImages($mainImage, $images);
    if (empty($validation->getImageErrors())) {



        $CarManagement = new CarsManagement();
        $Add = $CarManagement;
        $Add = new CarsManagement();
        $Add->setModel($Model);
        $Add->setType($Type);
        $Add->setYear($Your);
        $Add->setPrice($Prix);
        $Add->setColor($Color);
        $Add->setBrand($Brand);
        $Add->setTransmission_type($transmission_type);
        $Add->setFuel_type($fuel_type);
        $Add->setMileage($Mileage);
        $Add->setEngine_capacity($engineCapacity);
        $lastInsertId = $CarManagement->AddCar($Add);

        $urlManager = new ImagesManagement();
        $url = $urlManager->createDir($Model, $Type, $Brand);

        $MainImageManager = new ImagesManagement();
        $MainImageManager->AddMainImg($url, $mainImg_name, $mainImg_temp, $lastInsertId);

        $Images = new ImagesManagement();
        $Images->AddImages($url, $images_name, $images_temp, $lastInsertId);
    } else {
        ob_start();
        foreach ($validation->getImageErrors() as $alert) {
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Warning!</strong>
                <?= $alert ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
        }
        $massageError = ob_get_clean();

    }




}



include_once "./Views/Admin/Add.php";