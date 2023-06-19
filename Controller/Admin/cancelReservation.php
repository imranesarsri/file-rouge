<?php
if ($_GET['id_reservation']) {
    include_once "./Managers/ReservationManagement.php";
    // Include the 'ReservationManagement.php' file that contains the ReservationManagement class.

    $ReservationManagement = new ReservationManagement();
    // Create an instance of the ReservationManagement class.

    $ReservationManagement->cancelReservation($_GET['id_reservation']);
    // Call the cancelReservation method of the ReservationManagement instance with the 'id_reservation' parameter to cancel the reservation.

    header("Location:./Dashboard.php?action=" . $_GET['link']);
    // Redirect the user to the Dashboard.php page with the 'action' parameter set to the value of the 'link' parameter from the URL.
}