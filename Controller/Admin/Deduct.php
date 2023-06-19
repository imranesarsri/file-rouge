<?php
if (isset($_GET['car_id']) && isset($_GET['id_client']) && isset($_GET['id_reservation'])) {
    // Check if the 'car_id', 'id_client', and 'id_reservation' parameters are set in the URL.

    include_once "./Managers/ReservationManagement.php";
    // Include the 'ReservationManagement.php' file that contains the ReservationManagement class.

    $ReservationManagement = new ReservationManagement();
    // Create an instance of the ReservationManagement class.

    $ReservationManagement->cancelReservation($_GET['id_reservation']);
    // Call the cancelReservation method of the ReservationManagement instance with the 'id_reservation' parameter to cancel the reservation.

    include_once "./Managers/CarsManagement.php";
    // Include the 'CarsManagement.php' file that contains the CarsManagement class.

    $CarManagement = new CarsManagement();
    // Create an instance of the CarsManagement class.

    $CarManagement->updateStatus('available', $_GET['car_id']);
    // Call the updateStatus method of the CarsManagement instance to update the status of the car with the specified 'car_id' to 'available'.

    include_once "./Managers/ClientsManagement.php";
    // Include the 'ClientsManagement.php' file that contains the ClientsManagement class.

    $ClientManagement = new ClientsManagement();
    // Create an instance of the ClientsManagement class.

    $ClientManagement->decrementPoints($_GET['id_client']);
    // Call the decrementPoints method of the ClientsManagement instance with the 'id_client' parameter to decrement the points of the client.

    header("Location:./Dashboard.php?action=Reserve");
    // Redirect the user to the Dashboard.php page with the 'action' parameter set to 'Reserve'.
}