<?php
$method = "post";
$action = "";
$enctype = "";
$headerSection = "Available Cars for Sale";
ob_start();
?>
<table>
    <tr>
        <th>Image</th>
        <th>Model</th>
        <th>Year</th>
        <th>Price</th>
        <th>Color</th>
        <th>Brand</th>
        <th>Mileage</th>
        <th>Status</th>
        <th>Engine</th>
        <th>Action</th>
    </tr>
    <?php
    foreach ($results as $result) {
        ?>
    <tr>
        <td><img class="img-table" src="<?= $result->getMain_img() ?>" alt=""></td>
        <td>
            <?= $result->getModel() ?>
        </td>
        <td>
            <?= $result->getYear() ?>
        </td>
        <td>
            <?= $result->getPrice() ?>
        </td>
        <td>
            <?= $result->getColor() ?>
        </td>
        <td>
            <?= $result->getBrand() ?>
        </td>
        <td>
            <?= $result->getMileage() ?>Km
        </td>
        <td>
            <?= $result->getStatus() ?>
        </td>
        <td>
            <?= $result->getEngine_capacity() ?> L
        </td>
        <td class="btn-table">
            <a href="./dashboard.php?action=Delete&id_car=<?= $result->getCar_id() ?>" class="btn-red m-1"><i
                    class="fa-solid fa-trash-can"></i></a>
            <a href="./dashboard.php?action=Update&id_car=<?= $result->getCar_id() ?>" class="btn-success m-1"><i
                    class="fa-solid fa-pencil"></i></a>
            <a href="./dashboard.php?action=Details&id_car=<?= $result->getCar_id() ?>" class="btn-blue m-1"><i
                    class="fa-solid fa-database"></i></a>
        </td>
    </tr>
    <?php
    }
    ;
    ?>
</table>
<?php

$bodySection = ob_get_clean();
$footerSection = " <a href='./dashboard.php?action=Add' class='blue-button button'>Add </a>";


include_once "./Views/Admin/layout.php";

?>