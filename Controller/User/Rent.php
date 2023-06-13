<?php
include_once "./Managers/CarsManagement.php";


$filterCar = new CarsManagement();
$filter = $filterCar->getAllByType('rent');



foreach ($filter as $result) {
    $getBrand[] = $result->getBrand();
    $getYear[] = $result->getYear();
    $getColor[] = $result->getColor();
    $getFuel[] = $result->getFuel_type();
    $getTransmission[] = $result->getTransmission_type();
}
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



$Brands = removeDuplicates($getBrand);
$Years = removeDuplicates($getYear);
$Colors = removeDuplicates($getColor);
$Fuels = removeDuplicates($getFuel);
$Transmissions = removeDuplicates($getTransmission);


function removeDuplicates($arr)
{

    $uniqueArray = array_values(array_unique($arr));
    sort($uniqueArray);
    return $uniqueArray;
}




if (isset($_POST['btnSherch'])) {



    $searchPrice = $_POST['price'];
    $where = '';

    if (!empty($searchPrice)) {
        $where .= "AND price <= $searchPrice ";
    }

    if (!empty($_POST['brands'])) {
        $filterBrands = $_POST['brands'];

        $condition = '';
        foreach ($filterBrands as $Brand) {
            $condition .= "brand = '$Brand' OR ";
        }
        $condition = rtrim($condition, ' OR ');
        $where .= "AND ($condition) ";
    }


    if (!empty($_POST['Years'])) {
        $filterYears = $_POST['Years'];
        $condition = '';
        foreach ($filterYears as $Year) {
            $condition .= "year = '$Year' OR ";
        }
        $condition = rtrim($condition, ' OR ');
        $where .= "AND ($condition) ";
    }


    if (!empty($_POST['Colors'])) {
        $filtercolors = $_POST['Colors'];
        $condition = '';
        foreach ($filtercolors as $color) {
            $condition .= "color = '$color' OR ";
        }
        $condition = rtrim($condition, ' OR ');
        $where .= "AND ($condition) ";
    }


    if (!empty($_POST['Fuels'])) {
        $filterFuels = $_POST['Fuels'];
        $condition = '';
        foreach ($filterFuels as $Fuel) {
            $condition .= "fuel_type = '$Fuel' OR ";
        }
        $condition = rtrim($condition, ' OR ');
        $where .= "AND ($condition )";
    }


    if (!empty($_POST['Transmissions'])) {
        $filterTransmissions = $_POST['Transmissions'];
        $condition = '';
        foreach ($filterTransmissions as $Transmission) {
            $condition .= "transmission_type = '$Transmission' OR ";
        }
        $condition = rtrim($condition, ' OR ');
        $where .= "AND ($condition )";
    }

    $where = trim($where);
    echo $where;

    $CarManagement = new CarsManagement();
    $results = $CarManagement->searchWhere('rent', $where);

    foreach ($results as $result) {
        $getBrand[] = $result->getBrand();
        $getYear[] = $result->getYear();
        $getColor[] = $result->getColor();
        $getFuel[] = $result->getFuel_type();
        $getTransmission[] = $result->getTransmission_type();
    }

} else {

    $CarManagement = new CarsManagement();
    $results = $CarManagement->getAllByType('rent');


}




include_once "./Views/User/Rent.php";