<?php
include_once "./Managers/ClientsManagement.php";
// Include the 'ClientsManagement.php' file that contains the ClientsManagement class.

$CLientManagement = new ClientsManagement();
// Create an instance of the ClientsManagement class.

$results = $CLientManagement->gitAllUsers('0');
// Call the gitAllUsers method of the ClientsManagement instance to retrieve all users from the database with the parameter '0'.

include_once "./Views/Admin/AllUsers.php";
// Include the 'AllUsers.php' file that contains the HTML/PHP code for displaying all users.