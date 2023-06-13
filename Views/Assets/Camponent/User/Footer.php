<?php
ob_start()
    ?>
<footer class="text-center text-lg-start p-2 ">

    <section class="">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <div class="text-uppercase fw-bold mb-4">
                        <img src="./Views/Assets/img/logo_dark.png" class="logo" alt="">
                        <span>Luxe Drive</span>
                    </div>
                    <p>
                        Here you can use rows and columns to organize your footer content. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Pages
                    </h6>
                    <p>
                        <a href="./index.php" class="text-reset">Home</a>
                    </p>
                    <p>
                        <a href="./About.php" class="text-reset">About</a>
                    </p>
                    <p>
                        <a href="./Services.php" class="text-reset">Sale</a>
                    </p>
                    <p>
                        <a href="./Services.php" class="text-reset">Rent</a>
                    </p>
                    <p>
                        <a href="./Contact.php" class="text-reset">Contact</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        contact
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">
                            <i class="fa-brands fa-facebook me-3  text-2xl"></i>
                            <span>Luxe Drive</span>
                        </a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">
                            <i class="fa-brands fa-instagram me-3  text-2xl"></i>
                            <span>Luxe Drive</span>
                        </a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">
                            <i class="fa-brands fa-twitter me-3 text-2xl"></i>
                            <span>Luxe Drive</span>
                        </a>
                    </p>

                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p><i class="fas fa-home me-3"></i>
                        <span>hay bir jdid gznaya tanger</span>
                    </p>
                    <p>
                        <i class="fa-solid fa-phone me-3"></i>
                        <span>212+ 6261 56115</span>
                    </p>
                    <p>
                        <i class="fa-solid fa-phone me-3"></i>
                        <span>212+ 25107125</span>
                    </p>
                    <p>
                        <i class="fa-solid fa-envelope me-3"></i>
                        <span>sarsri.imrane@gmail.com</span>
                    </p>

                </div>
            </div>
        </div>
    </section>
    <hr>
    <div class="text-center p-4">
        Copyright © Luxe Drive. All rights reserved.
    </div>
</footer>

<?php
$Footer = ob_get_clean();