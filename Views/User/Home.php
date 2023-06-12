<?php 
ob_start();
?>
<section class="main-section d-flex justify-content-start align-items-center p-5  ">
    <div class="content col-md-6">
        <h2 class="fw-bolder">Do you want to <span>buy</span> or <span>rent</span> your dream <span>car</span> ?
        </h2>
        <p class="text-white-50  lh-sm">
            We are a company that specializes in providing car sales and rental services. We strive to meet the
            needs of our customers and fulfill their desires of owning their dream car.
        </p>
        <div class="d-flex gap-3">
            <button class="red-button">Buy now</button>
            <button class="red-button-rounded">Buy now</button>

        </div>
    </div>
</section>

<?php
$Content= ob_get_clean();

include_once "./Views/User/layout.php";