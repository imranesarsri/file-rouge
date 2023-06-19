<?php

?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Views/Assets/Css/all.min.css">
    <link rel="stylesheet" href="./Views/Assets/Css/bootstrap.min.css">
    <link rel="stylesheet" href="./Views/Assets/Css/User/style.css">
    <script src="./Views/Assets/Js/all.min.js"></script>
    <script src="./Views/Assets/Js/bootstrap.bundle.min.js"></script>
    <script src="./Views/Assets/Js/jquery.js"></script>

</head>

<body class="dark">

    <section class="row login py-3 ">
        <div class="col-12 col-sm-10 col-md-4 col-xl-3 card-login m-auto">
            <form method="post" class="py-5 pe-4 ps-2 d-flex flex-column">
                <?= $Content ?>
            </form>
        </div>
    </section>

    <script src="./Views/Assets/Js/User/main.js"></script>
    <script src="./Views/Assets/Js/darkMode.js"></script>
    <script src="./Views/Assets/Js/Login/SignUp.js"></script>
    <script src="./Views/Assets/Js/Login/SignIn.js"></script>

</body>

</html>