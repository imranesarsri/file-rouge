<?php
session_start();

if (isset($_SESSION['Email'])) {
    $CurrentDate = date('Y-m-d');
    $FutureDate = date('Y-m-d', strtotime($CurrentDate . ' + 1 day'));
    $FullName = $_SESSION['Full_name'];
    $Email = $_SESSION['Email'];
    $Phone = $_SESSION['Phone_number'];
    $CIN = $_SESSION['CIN'];
    $IdClient = $_SESSION['Id_client'];
    $Date = $_POST['date'];
    $CarId = $_POST['Reservation'];

    echo $IdClient . '<br>';
    echo $_POST['date'] . '<br>';
    echo $_POST['Reservation'] . '<br>';
    echo $CurrentDate . '<br>';
    echo $FutureDate . '<br>';
    echo $FullName . '<br>';
    echo $Email . '<br>';
    echo $Phone . '<br>';
    echo $CIN . '<br>';

    if (isset($Date) && !empty($Date) && $Date > $FutureDate) {

        include_once "./Managers/ReservationManagement.php";
        $ReservationManagement = new ReservationManagement();
        $Add = $ReservationManagement;
        $Add->setCar_id($CarId);
        $Add->setId_client($IdClient);
        $Add->setDate_reservation($CurrentDate);
        $Add->setDate_end_reservation($Date);
        $ReservationManagement->AddReservation($Add, '0');
        header("Location:./index.php");


    } elseif (isset($Date) && !empty($Date) && $Date < $CurrentDate) {
        echo "Errorro";
    } else {
        include_once "./Managers/ReservationManagement.php";
        $ReservationManagement = new ReservationManagement();
        $Add = $ReservationManagement;
        $Add->setCar_id($CarId);
        $Add->setId_client($IdClient);
        $Add->setDate_reservation($CurrentDate);
        $Add->setDate_end_reservation($FutureDate);
        $ReservationManagement->AddReservation($Add, '1');

        include_once "./Managers/CarsManagement.php";
        $CarManagement = new CarsManagement();
        $CarManagement->updateStatus('reserved', $CarId);

        header("Location:./index.php");

    }
} else {
    header("Location:./login.php?action=SignUp");
}

?>