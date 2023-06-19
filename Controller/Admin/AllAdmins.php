<?php
include_once "./Managers/ClientsManagement.php";
// Include the 'ClientsManagement.php' file that contains the ClientsManagement class.

$CLientManagement = new CLientsManagement();
// Create an instance of the ClientsManagement class.

$results = $CLientManagement->gitAllUsers('1');
// Call the gitAllUsers method of the ClientsManagement instance to retrieve all admin users from the database.
// Pass '1' as a parameter to specify that you want to retrieve admin users.

include_once "./Views/Admin/AllAdmins.php";
// Include the 'AllAdmins.php' file that contains the HTML/PHP code for displaying all admin users.