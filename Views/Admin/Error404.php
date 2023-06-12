<?php
$method = "post";
$action = "";
$enctype = "";
$headerSection = "Page Not Found";
ob_start();
?>

<p>Oops! The page you are looking for is not found. Please check the entered address and try again.</p>
<img src="./Views/Assets/img/imgPagEerror.png" alt="">
<?php
$bodySection = ob_get_clean();
$footerSection = "<a href='./Dashboard.php' class='blue-button button'>Dashboard</a>";

include_once "./Views/Admin/layout.php";

?>