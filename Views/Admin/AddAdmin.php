<?php
$method = "post";
$action = "";
$enctype = "";
$headerSection = "add Admin";


ob_start();
?>
<?php if ($alertMasseg) {
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Practical success!</strong>
        <p> Customer added successfully </p> <button type="button" class="btn-close" data-bs-dismiss="alert"
            aria-label="Close"></button>
    </div>
    <?php
} ?>

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
    <div class="errorMessage">
        <?= $errorEmail ?>
    </div>

</div>
<div>
    <label for="Phone">Phone</label>
    <i id="iconPhone" class="fa-solid icon"></i>
    <input name="phone" type="text" id="Phone">
    <div class="errorMessage" id="errorPhone"></div>
    <div class="errorMessage">
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

<?php
$bodySection = ob_get_clean();
$footerSection = "<button id='btnSignUp' name='btnSignUp' class='blue-button '>Add Admin</button>";

include_once "./Views/Admin/layout.php";

?>