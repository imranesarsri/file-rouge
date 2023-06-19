<?php
include_once "./Managers/ReservationManagement.php";
// Include the 'ReservationManagement.php' file that contains the ReservationManagement class.

$ReservationManagement = new ReservationManagement();
// Create an instance of the ReservationManagement class.

$results = $ReservationManagement->getReservationWhere('1');
// Call the getReservationWhere method of the ReservationManagement instance with the parameter '1' to retrieve reservations.

include_once "./Views/Admin/Reserve.php";
// Include the "Reserve.php" file to display the reservations.