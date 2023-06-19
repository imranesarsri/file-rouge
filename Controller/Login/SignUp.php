<?php

session_start();
// Start the session.

$errorEmail = '';

if (isset($_POST['btnSignUp'])) {
    $Full_name = $_POST['fullName'];
    $Phone_number = $_POST['phone'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $CIN = $_POST['CIN'];

    include_once "./Managers/ClientsManagement.php";
    // Include the 'ClientsManagement.php' file.

    $CLientManagement = new CLientsManagement();
    // Create an instance of the CLientsManagement class.

    if (empty($CLientManagement->validSingUp($Email))) {
        $Add = $CLientManagement;
        $Add->setFull_name($Full_name);
        $Add->setPhone_number($Phone_number);
        $Add->setEmail($Email);
        $Add->setPassword($Password);
        $Add->setCIN($CIN);
        $add = $CLientManagement->AddClient($Add, '0');
        // Add the client using the AddClient method of the CLientsManagement instance.

        $_SESSION['Id_client'] = $add;
        $_SESSION['Full_name'] = $Full_name;
        $_SESSION['Phone_number'] = $Phone_number;
        $_SESSION['Email'] = $Email;
        $_SESSION['CIN'] = $CIN;
        $_SESSION['Image_profile'] = "Uploads/Client/mageprofaile.jpg";
        // Set the session variables with the client data.

        header("Location:./index.php");
        // Redirect the user to the index page.
    } else {
        $errorEmail = $CLientManagement->validSingUp($Email);
        // Set the error message for invalid sign-up (email already exists).
    }
}

include_once "./Views/Login/SignUp.php";
// Include the "SignUp.php" file to display the sign-up form.