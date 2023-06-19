<?php
include_once "./Managers/ReservationManagement.php";
// Include the 'ReservationManagement.php' file that contains the ReservationManagement class

$ReservationManagement = new ReservationManagement();
// Create an instance of the ReservationManagement class

$results = $ReservationManagement->getReservationWhere('0');
// Call the getReservationWhere method of the ReservationManagement instance,
// passing '0' as the parameter value. This method likely retrieves reservations
// based on a specific condition and returns the results.

include_once "./Views/Admin/ActiveReservations.php";
// Include the 'ActiveReservations.php' file located in the './Views/Admin/' directory.
// This file is responsible for displaying the active reservations.