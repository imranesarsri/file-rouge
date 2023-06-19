<?php
session_start();
if (isset($_POST['signOut'])) {
    session_unset();
    session_destroy();
    header("Location:./index.php");
}
include_once "./Views/Assets/Camponent/Admin/Header.php";
include_once "./Views/Assets/Camponent/Admin/Nav.php";


?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Views/Assets/Css/all.min.css">
    <link rel="stylesheet" href="./Views/Assets/Css/bootstrap.min.css">
    <link rel="stylesheet" href="./Views/Assets/Css/Admin/main.css">
    <script src="./Views/Assets/Js/all.min.js"></script>
    <script src="./Views/Assets/Js/bootstrap.bundle.min.js"></script>
    <script src="./Views/Assets/Js/jquery.js"></script>

</head>

<body class="dark">
    <?= $Nav ?>
    <main>
        <?= $Header ?>
        <div>
            <section>
                <form action="<?= $action ?>" method="<?= $method ?>" enctype="<?= $enctype ?>">
                    <div class="header-section">
                        <div class="section-title text-capitalize">
                            <?= $headerSection ?>
                        </div>
                    </div>
                    <div class="body-section row">
                        <?= $bodySection ?>
                    </div>
                    <div class="footer-section d-flex gap-3">
                        <?= $footerSection ?>
                    </div>
                </form>
            </section>
        </div>
    </main>


    <script src="./Views/Assets/Js/Admin/main.js"></script>
    <script src="./Views/Assets/Js/darkMode.js"></script>
    <script src="./Views/Assets/Js/admin.js"></script>
    <script src="./Views/Assets/Js/main.js"></script>
</body>

</html>