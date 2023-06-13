<?php
ob_start();
?>
<section class="row  my-5 container mx-auto">
    <div class=" m-auto text-center">
        <h2 class="">about us</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis earum inventore corrupti eos dolores
            magni
            similique debitis cupiditate. Temporibus deleniti aperiam dignissimos laudantium fuga! Ea voluptatibus eum
            dolorem
            iusto suscipit.
        </p>
    </div>
    <div class="row my-5 d-flex justify-content-between">
        <div class="col-12 col-lg-6 mb-3 mb-lg-0 ">
            <h2>about us</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis earum inventore corrupti eos dolores
                magni
                similique debitis cupiditate. Temporibus deleniti aperiam dignissimos laudantium fuga! Ea voluptatibus
                eum
                dolorem
                iusto suscipit.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-3 mb-lg-0 ">
            <img class="imgAbout" src="./Views/Assets/img/gas-station-oil-industry-oil-prices-oil-and-gas.jpg" alt="">
        </div>
    </div>
    <div class="row my-5 d-flex justify-content-between">
        <div class="col-12 col-lg-6 mb-3 mb-lg-0 ">
            <img class="imgAbout" src="./Views/Assets/img/gas-station-oil-industry-oil-prices-oil-and-gas.jpg" alt="">
        </div>
        <div class="col-12 col-lg-6 mb-3 mb-lg-0 ">
            <h2>about us</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis earum inventore corrupti eos dolores
                magni
                similique debitis cupiditate. Temporibus deleniti aperiam dignissimos laudantium fuga! Ea voluptatibus
                eum
                dolorem
                iusto suscipit.
            </p>
        </div>
    </div>

    <div class="row my-5 d-flex justify-content-between">
        <div class="col-12 col-lg-6 mb-3 mb-lg-0 ">
            <h2>about us</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis earum inventore corrupti eos dolores
                magni
                similique debitis cupiditate. Temporibus deleniti aperiam dignissimos laudantium fuga! Ea voluptatibus
                eum
                dolorem
                iusto suscipit.
            </p>
        </div>
        <div class="col-12 col-lg-6 mb-3 mb-lg-0 ">
            <img class="imgAbout" src="./Views/Assets/img/imgabout2.jpg" alt="">
        </div>
    </div>
</section>

<?php
$Content = ob_get_clean();

include_once "./Views/User/layout.php";