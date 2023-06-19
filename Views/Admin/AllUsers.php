<?php
$method = "post";
$action = "";
$enctype = "";
$headerSection = "All users";
ob_start();
?>

<table>
    <tr>
        <th>Image</th>
        <th>Full Name</th>
        <th>Phone Name</th>
        <th>Email</th>
        <th>CIN</th>
        <th>Points</th>
    </tr>
    <?php
    foreach ($results as $result) {

        ?>
        <tr>
            <td><img class="img-table" src="<?= $result->getImage_profile() ?>" alt=""></td>
            <td>
                <?= $result->getFull_name() ?>
            </td>
            <td>
                <?= $result->getPhone_number() ?>
            </td>
            <td>
                <?= $result->getEmail() ?>
            </td>
            <td>
                <?= $result->getCIN() ?>
            </td>
            <td>
                <?= $result->getPoints() ?>
            </td>
        </tr>

        <?php
    }
    ?>
</table>
<?php

$bodySection = ob_get_clean();
$footerSection = " <a href='./dashboard.php?action=AddUser' class='blue-button button'>Add Users </a>";


include_once "./Views/Admin/layout.php";

?>