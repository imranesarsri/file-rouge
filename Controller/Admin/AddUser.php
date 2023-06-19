<?php
$alertMasseg = '';
$errorEmail = false;
if (isset($_POST['btnSignUp'])) {
    // Check if the 'btnSignUp' button is clicked.

    $Full_name = $_POST['fullName'];
    // Get the value of the 'fullName' field from the form.

    $Phone_number = $_POST['phone'];
    // Get the value of the 'phone' field from the form.

    $Email = $_POST['email'];
    // Get the value of the 'email' field from the form.

    $Password = $_POST['password'];
    // Get the value of the 'password' field from the form.

    $CIN = $_POST['CIN'];
    // Get the value of the 'CIN' field from the form.

    include_once "./Managers/ClientsManagement.php";
    // Include the 'ClientsManagement.php' file that contains the ClientsManagement class.

    $CLientManagement = new CLientsManagement();
    // Create an instance of the ClientsManagement class.

    if (empty($CLientManagement->validSingUp($Email))) {
        // Check if the email is valid and not already registered.

        $Add = $CLientManagement;
        // Assign the ClientsManagement instance to the $Add variable.

        $Add->setFull_name($Full_name);
        // Set the value of the 'full_name' property using the setter method.

        $Add->setPhone_number($Phone_number);
        // Set the value of the 'phone_number' property using the setter method.

        $Add->setEmail($Email);
        // Set the value of the 'email' property using the setter method.

        $Add->setPassword($Password);
        // Set the value of the 'password' property using the setter method.

        $Add->setCIN($CIN);
        // Set the value of the 'CIN' property using the setter method.

        $add = $CLientManagement->AddClient($Add, '0');
        // Call the AddClient method of the ClientsManagement instance to add the client to the database.
        // Pass the $Add instance and '0' as parameters.

        $alertMasseg .= true;
        // Append 'true' to the $alertMasseg variable.
    } else {
        $errorEmail = $CLientManagement->validSingUp($Email);
        // Get the error message for the invalid email.
    }
}

include_once "./Views/Admin/AddUser.php";
// Include the 'AddUser.php' file that contains the HTML/PHP code for the add user view.