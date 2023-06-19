<?php
// Include the CarsManagement file
include_once "./Managers/CarsManagement.php";

// Create an instance of the CarsManagement class
$filterCar = new CarsManagement();

// Get all cars
$filter = $filterCar->getAll();

// Initialize arrays to store car attributes
$getBrand = [];
$getYear = [];
$getColor = [];
$getFuel = [];
$getTransmission = [];

// Iterate through the filtered cars and store their attributes
foreach ($filter as $result) {
    $getBrand[] = $result->getBrand();
    $getYear[] = $result->getYear();
    $getColor[] = $result->getColor();
    $getFuel[] = $result->getFuel_type();
    $getTransmission[] = $result->getTransmission_type();
}

// Function to abbreviate transmission types
function abbreviateTransmission($Transmission)
{
    switch ($Transmission) {
        case "direct shift gearbox":
            return "DSG";
        case "continuously variable":
            return "continuously";
        default:
            return $Transmission;
    }
}

// Function to abbreviate fuel types
function abbreviateFuel($Fuel)
{
    switch ($Fuel) {
        case "compressed natural gas":
            return "CNG";
        case "liquefied petroleum gas":
            return "LPG";
        default:
            return $Fuel;
    }
}

// Remove duplicates from the arrays and store the unique values
$Brands = removeDuplicates($getBrand);
$Years = removeDuplicates($getYear);
$Colors = removeDuplicates($getColor);
$Fuels = removeDuplicates($getFuel);
$Transmissions = removeDuplicates($getTransmission);

// Function to remove duplicate values from an array
function removeDuplicates($arr)
{
    $uniqueArray = array_values(array_unique($arr));
    sort($uniqueArray);
    return $uniqueArray;
}

// Check if the search button is clicked
if (isset($_POST['btnSherch'])) {

    // Retrieve the search criteria from the form
    $searchPrice = $_POST['price'];
    $where = '';

    // Include price in the search criteria if it's not empty
    if (!empty($searchPrice)) {
        $where .= "AND price <= $searchPrice ";
    }

    // Include selected brands in the search criteria
    if (!empty($_POST['brands'])) {
        $filterBrands = $_POST['brands'];

        $condition = '';
        foreach ($filterBrands as $Brand) {
            $condition .= "brand = '$Brand' OR ";
        }
        $condition = rtrim($condition, ' OR ');
        $where .= "AND ($condition) ";
    }

    // Include selected years in the search criteria
    if (!empty($_POST['Years'])) {
        $filterYears = $_POST['Years'];
        $condition = '';
        foreach ($filterYears as $Year) {
            $condition .= "year = '$Year' OR ";
        }
        $condition = rtrim($condition, ' OR ');
        $where .= "AND ($condition) ";
    }

    // Include selected colors in the search criteria
    if (!empty($_POST['Colors'])) {
        $filtercolors = $_POST['Colors'];
        $condition = '';
        foreach ($filtercolors as $color) {
            $condition .= "color = '$color' OR ";
        }
        $condition = rtrim($condition, ' OR ');
        $where .= "AND ($condition) ";
    }

    // Include selected fuel types in the search criteria
    if (!empty($_POST['Fuels'])) {
        $filterFuels = $_POST['Fuels'];
        $condition = '';
        foreach ($filterFuels as $Fuel) {
            $condition .= "fuel_type = '$Fuel' OR ";
        }
        $condition = rtrim($condition, ' OR ');
        $where .= "AND ($condition )";
    }

    // Include selected transmission types in the search criteria
    if (!empty($_POST['Transmissions'])) {
        $filterTransmissions = $_POST['Transmissions'];
        $condition = '';
        foreach ($filterTransmissions as $Transmission) {
            $condition .= "transmission_type = '$Transmission' OR ";
        }
        $condition = rtrim($condition, ' OR ');
        $where .= "AND ($condition )";
    }

    // Trim the WHERE clause
    $where = trim($where);

    // Perform the search using the CarsManagement class
    $CarManagement = new CarsManagement();
    $results = $CarManagement->searchWhere($where);

    // Retrieve the attributes of the search results
    foreach ($results as $result) {
        $getBrand[] = $result->getBrand();
        $getYear[] = $result->getYear();
        $getColor[] = $result->getColor();
        $getFuel[] = $result->getFuel_type();
        $getTransmission[] = $result->getTransmission_type();
    }

} else {
    // If search button is not clicked, get all cars
    $CarManagement = new CarsManagement();
    $results = $CarManagement->getAll();
}

// Include the Home.php file to display the filtered cars
include_once "./Views/User/Home.php";