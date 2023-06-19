<?php
$massageError = "";
// Initialize an empty string variable to store error messages.

if (isset($_POST['btnAddCar'])) {
    // Check if the 'btnAddCar' button was clicked.

    $mainImage = $_FILES['mianImage'];
    // Get the main image file from the $_FILES superglobal array.

    $mainImg_name = $mainImage['name'];
    // Get the name of the main image file.

    $mainImg_temp = $mainImage['tmp_name'];
    // Get the temporary location of the main image file.

    $images = $_FILES['images'];
    // Get the additional images files from the $_FILES superglobal array.

    $images_name = $images['name'];
    // Get the names of the additional images files.

    $images_temp = $images['tmp_name'];
    // Get the temporary locations of the additional images files.

    $Model = $_POST['Model'];
    // Get the value of the 'Model' input field from the submitted form.

    $Brand = $_POST['Brand'];
    // Get the value of the 'Brand' input field from the submitted form.

    $Color = $_POST['Color'];
    // Get the value of the 'Color' input field from the submitted form.

    $engineCapacity = $_POST['engineCapacity'];
    // Get the value of the 'engineCapacity' input field from the submitted form.

    $Prix = $_POST['Prix'];
    // Get the value of the 'Prix' input field from the submitted form.

    $Mileage = $_POST['Mileage'];
    // Get the value of the 'Mileage' input field from the submitted form.

    $Your = $_POST['Your'];
    // Get the value of the 'Your' input field from the submitted form.

    $fuel_type = $_POST['fuel_type'];
    // Get the value of the 'fuel_type' input field from the submitted form.

    $transmission_type = $_POST['transmission_type'];
    // Get the value of the 'transmission_type' input field from the submitted form.

    $imagesUrl = [];
    // Initialize an empty array to store the URLs of the images.

    include_once "./Managers/carsManagement.php";
    // Include the 'carsManagement.php' file that contains the CarsManagement class.

    include_once "./Managers/ImagesManagement.php";
    // Include the 'ImagesManagement.php' file that contains the ImagesManagement class.

    $validation = new ImagesManagement();
    // Create an instance of the ImagesManagement class for image validation.

    $validation->validateImages($mainImage, $images);
    // Call the validateImages method of the ImagesManagement instance to validate the images.
    // Pass the main image and additional images as parameters.

    if (empty($validation->getImageErrors())) {
        // Check if there are no image validation errors.

        $CarManagement = new CarsManagement();
        // Create an instance of the CarsManagement class.

        $Add = $CarManagement;
        // Assign the CarsManagement instance to the $Add variable.

        $Add = new CarsManagement();
        // Create a new instance of the CarsManagement class and assign it to the $Add variable.

        // Set the values for the car properties using the setter methods.
        $Add->setModel($Model);
        $Add->setYear($Your);
        $Add->setPrice($Prix);
        $Add->setColor($Color);
        $Add->setBrand($Brand);
        $Add->setTransmission_type($transmission_type);
        $Add->setFuel_type($fuel_type);
        $Add->setMileage($Mileage);
        $Add->setEngine_capacity($engineCapacity);

        $lastInsertId = $CarManagement->AddCar($Add);
        // Call the AddCar method of the CarsManagement instance to add the car to the database.
        // Pass the $Add instance as a parameter and get the last inserted ID.

        $urlManager = new ImagesManagement();
        // Create an instance of the ImagesManagement class for URL management.

        $url = $urlManager->createDir($Model, $Brand);
        // Call the createDir method of the ImagesManagement instance to create a directory for the car images.
        // Pass the Model and Brand as parameters and get the URL of the directory.

        $MainImageManager = new ImagesManagement();
        // Create an instance of the ImagesManagement class for handling the main image.

        $MainImageManager->AddMainImg($url, $mainImg_name, $mainImg_temp, $lastInsertId);
        // Call the AddMainImg method of the ImagesManagement instance to add the main image to the database.
        // Pass the URL, name, temporary location, and last inserted ID as parameters.

        $Images = new ImagesManagement();
        // Create an instance of the ImagesManagement class for handling the additional images.

        $Images->AddImages($url, $images_name, $images_temp, $lastInsertId);
        // Call the AddImages method of the ImagesManagement instance to add the additional images to the database.
        // Pass the URL, names, temporary locations, and last inserted ID as parameters.

    } else {
        ob_start();
        // Start output buffering to capture the error messages.

        foreach ($validation->getImageErrors() as $alert) {
            // Iterate through the image validation errors.

            ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Warning!</strong>
    <?= $alert ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
        }

        $massageError = ob_get_clean();
        // Get the captured error messages and assign them to the $massageError variable.
    }
}

include_once "./Views/Admin/Add.php";
// Include the 'Add.php' file located in the './Views/Admin/' directory.
// This file is responsible for displaying the car addition form and error messages (if any).