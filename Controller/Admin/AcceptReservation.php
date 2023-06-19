<?php
if ($_GET['id_reservation']) {
    // Check if the 'id_reservation' parameter is present in the GET request

    include_once "./Managers/ReservationManagement.php";
    // Include the 'ReservationManagement.php' file that contains the ReservationManagement class

    $ReservationManagement = new ReservationManagement();
    // Create an instance of the ReservationManagement class

    $ReservationManagement->AcceptReservation($_GET['id_reservation']);
    // Call the AcceptReservation method of the ReservationManagement instance,
    // passing the value of the 'id_reservation' parameter obtained from the GET request

    header("Location: ./Dashboard.php?action=ActiveReservations");
    // Redirect the user to the 'Dashboard.php' page with the 'action' parameter set to 'ActiveReservations'
}