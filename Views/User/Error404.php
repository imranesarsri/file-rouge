<?php
ob_start();
?>
<div class="mx-auto w-full">
    <p class="text-center">Oops! The page you are looking for is not found. Please check the entered address and try
        again.</p>
    <img src="./Views/Assets/img/imgPagEerror.png" alt="">
</div>

<?php
$Content = ob_get_clean();

include_once "./Views/User/layout.php";