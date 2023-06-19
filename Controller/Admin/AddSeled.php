<?php

if (isset($_GET['car_id']) && isset($_GET['id_client']) && isset($_GET['id_reservation'])) {
    $CurrentDate = date('Y-m-d');
    include_once "./Managers/SeledManagement.php";
    $SeledManagement = new SeledManagement();
    $Add = $SeledManagement;
    $Add->setCar_id($_GET['car_id']);
    $Add->setId_client($_GET['id_client']);
    $Add->setDate_of_sale($CurrentDate);
    $AddSeled = $SeledManagement->addSeled($Add);

    include_once "./Managers/ReservationManagement.php";
    $ReservationManagement = new ReservationManagement();
    $ReservationManagement->cancelReservation($_GET['id_reservation']);

    include_once "./Managers/CarsManagement.php";
    $CarManagement = new CarsManagement();
    $CarManagement->updateStatus('sold', $_GET['car_id']);

    include_once "./Managers/CLientsManagement.php";
    $CLientManagement = new CLientsManagement();
    $CLientManagement->AddPoints($_GET['id_client']);

    // Points($id_client, $Points)

    header("Location:./Dashboard.php?action=Reserve");

}