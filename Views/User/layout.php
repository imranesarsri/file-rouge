<?php
session_start();
if (isset($_POST['signOut'])) {
    session_unset();
    session_destroy();
    header("Location:./index.php");
}

include_once "./Views/Assets/Camponent/User/Nav.php";
include_once "./Views/Assets/Camponent/User/Footer.php";
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

    <?= $Nav ?>
    <?= $Content ?>
    <?= $Footer ?>

    <script src="./Views/Assets/Js/User/main.js"></script>
    <script src="./Views/Assets/Js/darkMode.js"></script>
    <script>
    $(document).ready(function() {
        $(".slid-profail").click(function() {
            $(this).next(".sub-menu-profail").slideToggle(500)
        })
    })

    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("demo");
        let captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
    </script>

</body>

</html>