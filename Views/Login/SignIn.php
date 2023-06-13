<?php
$errorEmail = '';
if (isset($_POST['btnSignUp'])) {

    $Full_name = $_POST['fullName'];
    $Phone_number = $_POST['phone'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $CIN = $_POST['CIN'];

    include_once "./Managers/ClientsManagement.php";

    $CLientManagement = new CLientsManagement();


    if (empty($CLientManagement->validSingUp($Email))) {
        $Add = $CLientManagement;
        $Add->setFull_name($Full_name);
        $Add->setPhone_number($Phone_number);
        $Add->setEmail($Email);
        $Add->setPassword($Password);
        $Add->setCIN($CIN);
        $CLientManagement->AddClient($Add);
        $_SESSION['Email'] = $Email;
        header("Location:./index.php");
    } else {
        $errorEmail = $CLientManagement->validSingUp($Email)[0];
    }

}




ob_start();
?>
<div class="text-center fs-3 mb-3">Login</div>
<div>
    <label for="FullName">Full Name</label>
    <i id="iconFullName" class="fa-solid icon"></i>
    <input name="fullName" type="text" id="FullName">
    <div class="errorMessage" id="errorfullName"></div>
</div>
<div>
    <label for="Email">Email</label>
    <i id="iconEmail" class="fa-solid icon"></i>
    <input name="email" type="email" id="Email">
    <div class="errorMessage" id="errorEmail"></div>
</div>
<div>
    <label for="Phone">Phone</label>
    <i id="iconPhone" class="fa-solid icon"></i>
    <input name="phone" type="text" id="Phone">
    <div class="errorMessage" id="errorPhone"></div>
    <div class="errorMessage">
        <?= $errorEmail ?>
    </div>
</div>
<div>
    <label for="Password">Password</label>
    <i id="iconPassword" class="fa-solid icon"></i>
    <input name="password" type="password" id="password">
    <div class="errorMessage" id="errorPassword"></div>
</div>
<div>

    <label for="CIN">CIN</label>
    <i id="iconCin" class="fa-solid icon"></i>
    <input name="CIN" type="text" id="CIN">
    <div class="errorMessage" id="errorNickname"></div>

</div>
<div>
    <button id="btnSignUp" name="btnSignUp" class="blue-button btnLogin">Login</button>
</div>
<div class="mt-3 text-center">
    <span>Already have account ?</span>
    <a href="./login.php?action=SignUp">Sing In</a>
</div>
<?php
$Content = ob_get_clean();

include_once "./Views/Login/layout.php";