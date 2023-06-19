<?php
ob_start();
?>
<div class="text-center fs-3 mb-3">Sign In
</div>

<div>
    <label for="Email">Email</label>
    <i id="iconEmail" class="fa-solid icon"></i>
    <input name="email" type="email" id="Email">
    <div class="errorMessage" id="errorEmail"></div>
    <div>
        <?= $errorEmail ?>
    </div>
</div>
<div>
    <i id="iconPassword" class="fa-solid icon"></i>
    <label for="Password">Password</label>
    <input name="Password" type="Password" id="Password">
    <div class="errorMessage" id="errorPassword"></div>
    <div>
        <?= $errorPassword ?>
    </div>

</div>
<div>
    <button type="submit" id="btnSignIn" name="btnSignIn" class="blue-button btnLogin">Login</button>
</div>
<div class="mt-3 text-center">
    <span>Already have account ?</span>
    <a href="./login.php?action=SignUp">Sing Up</a>
</div>
<?php
$Content = ob_get_clean();

include_once "./Views/Login/layout.php";