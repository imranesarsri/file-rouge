<?php
$alertMasseg = '';
// Initialize an empty string variable to store alert messages.

$errorEmail = false;
// Initialize a boolean variable to track if there is an error with the email.

if (isset($_POST['btnSignUp'])) {
    // Check if the 'btnSignUp' button was clicked.

    // Get the value of the 'fullName ,phone, email, password, CIN' input field from the submitted form.
    $Full_name = $_POST['fullName'];
    $Phone_number = $_POST['phone'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $CIN = $_POST['CIN'];

    include_once "./Managers/ClientsManagement.php";
    // Include the 'ClientsManagement.php' file that contains the ClientsManagement class.

    $CLientManagement = new CLientsManagement();
    // Create an instance of the ClientsManagement class.

    if (empty($CLientManagement->validSingUp($Email))) {
        // Check if the email is valid by calling the validSingUp method of the ClientsManagement instance.
        // Pass the email as a parameter.

        $Add = $CLientManagement;
        // Assign the ClientsManagement instance to the $Add variable.

        $Add->setFull_name($Full_name);
        // Set the value of the 'Full_name' property using the setter method.

        $Add->setPhone_number($Phone_number);
        // Set the value of the 'Phone_number' property using the setter method.

        $Add->setEmail($Email);
        // Set the value of the 'Email' property using the setter method.

        $Add->setPassword($Password);
        // Set the value of the 'Password' property using the setter method.

        $Add->setCIN($CIN);
        // Set the value of the 'CIN' property using the setter method.

        $add = $CLientManagement->AddClient($Add, '1');
        // Call the AddClient method of the ClientsManagement instance to add the client to the database.
        // Pass the $Add instance and '1' as parameters.

        $alertMasseg .= true;
        // Append 'true' to the $alertMasseg variable to indicate a successful addition.
    } else {
        $errorEmail = $CLientManagement->validSingUp($Email);
        // Set the $errorEmail variable to the email validation error message returned by the validSingUp method.
    }
}

include_once "./Views/Admin/AddAdmin.php";
// Include the 'AddAdmin.php' file located in the './Views/Admin/' directory.
// This file is responsible for displaying the admin addition form and error messages (if any).