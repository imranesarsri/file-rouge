<?php
include "./DB/connectImg.php";
include "./Entity/Img.php";

class ImagesManagement
{
    public array $imageErrors = [];


    public function validateImages($mainImage, $secondaryImages)
    {
        $mainImg_name = $mainImage['name'];
        $mainImg_size = $mainImage['size'];
        $mainImg_error = $mainImage['error'];

        $images_name = $secondaryImages['name'];
        $images_size = $secondaryImages['size'];

        $images_count = count($images_name);
        $imageMaxSize = 200000;
        $allowed_extensions = ['jpg', 'gif', 'jpeg', 'png'];
        $main_extension = explode('.', $mainImg_name);
        $endMain_extension = strtolower(end($main_extension));
        $MainNameUrl = rand(0, 1000000) . "." . $endMain_extension;

        if ($mainImg_error == 4) {
            array_push($this->imageErrors, " <p>Thers No File Uploaded </p>");
        } elseif (!in_array($endMain_extension, $allowed_extensions)) {
            array_push($this->imageErrors, " <p>File is Not Valid  " . $MainNameUrl . "  </p>");
        } elseif ($mainImg_size > $imageMaxSize) {
            array_push($this->imageErrors, " <p>The uploaded image size must not exceed the allowed limit! <span class='text-danger'>" . $mainImg_size . "</span> / " . $imageMaxSize . "</p>");
        }


        if ($images_count >= 5 && $images_count < 20) {
            for ($i = 0; $i < $images_count; $i++) {
                $image_extension = explode('.', $images_name[$i]);
                $endImage_extension = strtolower(end($image_extension));
                if (in_array($endImage_extension, $allowed_extensions)) {
                    if ($images_size[$i] > $imageMaxSize) {
                        array_push($this->imageErrors, " <p>The uploaded image [ " . ($i + 1) . " ] [ " . $images_name[$i] . " ] 
                        size must not exceed the allowed limit! <span class='text-danger'>" . $images_size[$i] . "</span> / " . $imageMaxSize . "</p>");
                    }
                } else {
                    array_push($this->imageErrors, " <p>File is Not Valid [ " . ($i + 1) . " ] , image name [ " . $images_name[$i] . " ] </p>");
                }
            }
        } else {
            array_push($this->imageErrors, " <p> Please upload a minimum of 5 and a maximum of 20 images. you have uploaded " . $images_count . " photos</p>");
        }

        return empty($this->imageErrors);
    }

    public function getImageErrors()
    {
        return $this->imageErrors;
    }

    public function createDir($Model, $Type, $Brand)
    {
        $files_name = str_replace(' ', '', $Model . $Brand);
        $url = "Uploads/" . $Type . "/" . $files_name . rand(0, 1000000);
        mkdir($url);
        return $url;
    }

    public function AddMainImg($fileName, $mainImg_name, $mainImageTemp, $id_car)
    {
        $main_extension = explode('.', $mainImg_name);
        $endMain_extension = strtolower(end($main_extension));
        $main_img_name_rendom = rand(0, 1000000) . "." . $endMain_extension;
        move_uploaded_file($mainImageTemp, $_SERVER['DOCUMENT_ROOT'] . "\\file_rouge\\" . $fileName . "\\" . $main_img_name_rendom);
        $url = $fileName . "/" . $main_img_name_rendom;
        $sql = ("INSERT INTO `car_images`( `image_url`, `is_main`, `car_id`) 
            VALUES ('$url','1','$id_car')");
        DBImage::connect()->exec($sql);

    }
    public function AddImages($fileName, $images_name, $images_temp, $id_car)
    {
        $images_count = count($images_name);
        $imagesNameUrl = [];
        for ($i = 0; $i < $images_count; $i++) {

            $images_extension = explode('.', $images_name[$i]);
            $endImages_extension = strtolower(end($images_extension));
            $main_img_name_rendom = rand(0, 1000000) . "." . $endImages_extension;
            move_uploaded_file($images_temp[$i], $_SERVER['DOCUMENT_ROOT'] . "\\file_rouge\\" . $fileName . "\\" . $main_img_name_rendom);
            array_push($imagesNameUrl, $fileName . "/" . $main_img_name_rendom);
        }

        foreach ($imagesNameUrl as $imageUrl) {
            $sql = ("INSERT INTO `car_images`( `image_url`, `is_main`, `car_id`) 
            VALUES ('$imageUrl','0','$id_car')");
            DBImage::connect()->exec($sql);

        }
    }

    public function getSecondaryImages($id)
    {

        $select = "SELECT * FROM `car_images` WHERE car_id = $id";
        $result = DBImage::connect()->query($select);
        $resultImages = [];
        while ($row = $result->fetch()) {
            $resultImage = new Img();
            $resultImage->setImage_id_car($row['image_id']);
            $resultImage->setImage_url($row['image_url']);
            array_push($resultImages, $resultImage);
        }
        return $resultImages;
    }

    // count image
    public function countAllImages($id)
    {
        $select = "SELECT COUNT(image_url)
                    FROM car_images
                    WHERE `car_id` = $id";
        $result = DBImage::connect()->query($select);
        $resultfetch = $result->fetch();
        $count = new Img();
        $count->setCount($resultfetch['COUNT(image_url)']);
        return $count;
    }

    // update

    public function updateMainImage($idCar, $imageUrl)
    {
        $Update = "UPDATE `car_images` SET `image_url`='$imageUrl' WHERE `car_id` = $idCar  AND `is_main` = 1";
        DBImage::connect()->query($Update);
    }



}