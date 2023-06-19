<?php

session_start();
// Start the session.

$errorPassword = '';
$errorEmail = '';

if (isset($_POST['btnSignIn'])) {
    $Email = $_POST['email'];
    $Password = $_POST['Password'];

    include_once "./Managers/ClientsManagement.php";
    // Include the 'ClientsManagement.php' file.

    $CLientManagement = new CLientsManagement();
    // Create an instance of the CLientsManagement class.

    $LogeIn = $CLientManagement->logeIn($Email, $Password);
    // Call the logeIn method of the CLientsManagement instance to log in the user.

    if ($LogeIn == 'email') {
        $errorEmail .= 'This email does not exist';
        // Set the error message for non-existing email.
    } elseif ($LogeIn == 'password') {
        $errorPassword .= 'This password does not exist';
        // Set the error message for incorrect password.
    } elseif ($LogeIn == 'admin') {
        $_SESSION['Email'] = $Email;
        header("Location:./dashboard.php");
        // Set the session email and redirect to the admin dashboard.
    } elseif ($LogeIn == 'user') {
        $_SESSION['Email'] = $Email;
        header("Location:./index.php");
        // Set the session email and redirect to the user dashboard.
    }

    if (isset($_SESSION['Email'])) {
        $CLientManagement = new CLientsManagement();
        // Create a new instance of the CLientsManagement class.

        $resultByEmail = $CLientManagement->getByEmail($_SESSION['Email']);
        // Call the getByEmail method of the CLientsManagement instance to get the user data by email.

        $_SESSION['Id_client'] = $resultByEmail->getId_client();
        $_SESSION['Full_name'] = $resultByEmail->getFull_name();
        $_SESSION['Phone_number'] = $resultByEmail->getPhone_number();
        $_SESSION['Password'] = $resultByEmail->getPassword();
        $_SESSION['Image_profile'] = $resultByEmail->getImage_profile();
        $_SESSION['Admin'] = $resultByEmail->getAdmin();
        $_SESSION['CIN'] = $resultByEmail->getCIN();
        // Set the session variables with the user data retrieved.

    }
}

include_once "./Views/Login/SignIn.php";
// Include the "SignIn.php" file to display the sign-in form.