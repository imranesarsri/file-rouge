<?php
include "./Entity/Img.php";

class ImagesManagement
{

    /**
     * This function establishes a connection to the database.
     *
     * @return PDO
     */
    public function connect()
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=file_rouge', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
        } catch (PDOException $e) {
            die("error : not connected" . $e->getMessage());
        }
        return $db;
    }


    public array $imageErrors = []; // Array to store image validation errors

    /**
     * Validates the main image and secondary images.
     * Checks for file existence, file extension, and file size.
     * 
     * @param array $mainImage - The main image array containing name, size, and error.
     * @param array $secondaryImages - The array of secondary images containing names and sizes.
     * @return bool - True if all images are valid, false otherwise.
     */
    public function validateImages($mainImage, $secondaryImages)
    {
        // Validation for the main image
        $mainImg_name = $mainImage['name'];
        $mainImg_size = $mainImage['size'];
        $mainImg_error = $mainImage['error'];

        // Validation for the secondary images
        $images_name = $secondaryImages['name'];
        $images_size = $secondaryImages['size'];

        // Count the number of secondary images
        $images_count = count($images_name);

        // Maximum image size in bytes
        $imageMaxSize = 200000;

        // Allowed image file extensions
        $allowed_extensions = ['jpg', 'gif', 'jpeg', 'png'];

        // Get the file extension of the main image
        $main_extension = explode('.', $mainImg_name);
        $endMain_extension = strtolower(end($main_extension));

        // Generate a random name for the main image
        $MainNameUrl = rand(0, 1000000) . "." . $endMain_extension;

        // Validate the main image
        if ($mainImg_error == 4) {
            array_push($this->imageErrors, "<p>There's no file uploaded.</p>");
        } elseif (!in_array($endMain_extension, $allowed_extensions)) {
            array_push($this->imageErrors, "<p>File is not valid: $MainNameUrl.</p>");
        } elseif ($mainImg_size > $imageMaxSize) {
            array_push($this->imageErrors, "<p>The uploaded image size must not exceed the allowed limit! <span class='text-danger'>$mainImg_size</span> / $imageMaxSize</p>");
        }

        // Validate the secondary images
        if ($images_count >= 5 && $images_count < 20) {
            for ($i = 0; $i < $images_count; $i++) {
                $image_extension = explode('.', $images_name[$i]);
                $endImage_extension = strtolower(end($image_extension));
                if (in_array($endImage_extension, $allowed_extensions)) {
                    if ($images_size[$i] > $imageMaxSize) {
                        array_push($this->imageErrors, "<p>The uploaded image [" . ($i + 1) . "] [" . $images_name[$i] . "] size must not exceed the allowed limit! <span class='text-danger'>" . $images_size[$i] . "</span> / $imageMaxSize</p>");
                    }
                } else {
                    array_push($this->imageErrors, "<p>File is not valid [" . ($i + 1) . "], image name [" . $images_name[$i] . "]</p>");
                }
            }
        } else {
            array_push($this->imageErrors, "<p>Please upload a minimum of 5 and a maximum of 20 images. You have uploaded $images_count photos.</p>");
        }

        return empty($this->imageErrors);
    }

    /**
     * Returns the array of image validation errors.
     *
     * @return array - Array of image validation errors.
     */
    public function getImageErrors()
    {
        return $this->imageErrors;
    }

    /**
     * Creates a directory for storing the uploaded images based on the model and brand.
     * 
     * @param string $Model - The model name.
     * @param string $Brand - The brand name.
     * @return string - The directory path where the images will be stored.
     */
    public function createDir($Model, $Brand)
    {
        $files_name = str_replace(' ', '', $Model . $Brand);
        $url = "Uploads/" . "/" . $files_name . rand(0, 1000000);
        mkdir($url);
        return $url;
    }

    /**
     * Adds the main image to the database and moves it to the specified directory.
     * 
     * @param string $fileName - The name of the directory where the image will be stored.
     * @param string $mainImg_name - The name of the main image file.
     * @param string $mainImageTemp - The temporary location of the main image.
     * @param int $id_car - The ID of the car associated with the image.
     */
    public function AddMainImg($fileName, $mainImg_name, $mainImageTemp, $id_car)
    {
        $main_extension = explode('.', $mainImg_name);
        $endMain_extension = strtolower(end($main_extension));
        $main_img_name_random = rand(0, 1000000) . "." . $endMain_extension;
        move_uploaded_file($mainImageTemp, $_SERVER['DOCUMENT_ROOT'] . "\\file_rouge\\" . $fileName . "\\" . $main_img_name_random);
        $url = $fileName . "/" . $main_img_name_random;
        $sql = ("INSERT INTO `car_images`( `image_url`, `is_main`, `car_id`) 
            VALUES ('$url','1','$id_car')");
        $this->connect()->exec($sql);
    }

    /**
     * Adds the secondary images to the database and moves them to the specified directory.
     * 
     * @param string $fileName - The name of the directory where the images will be stored.
     * @param array $images_name - The array of secondary image names.
     * @param array $images_temp - The array of temporary locations of the secondary images.
     * @param int $id_car - The ID of the car associated with the images.
     */
    public function AddImages($fileName, $images_name, $images_temp, $id_car)
    {
        $images_count = count($images_name);
        $imagesNameUrl = [];
        for ($i = 0; $i < $images_count; $i++) {
            $images_extension = explode('.', $images_name[$i]);
            $endImages_extension = strtolower(end($images_extension));
            $main_img_name_random = rand(0, 1000000) . "." . $endImages_extension;
            move_uploaded_file($images_temp[$i], $_SERVER['DOCUMENT_ROOT'] . "\\file_rouge\\" . $fileName . "\\" . $main_img_name_random);
            array_push($imagesNameUrl, $fileName . "/" . $main_img_name_random);
        }

        foreach ($imagesNameUrl as $imageUrl) {
            $sql = ("INSERT INTO `car_images`( `image_url`, `is_main`, `car_id`) 
            VALUES ('$imageUrl','0','$id_car')");
            $this->connect()->exec($sql);
        }
    }

    /**
     * Retrieves the secondary images associated with a car.
     * 
     * @param int $id - The ID of the car.
     * @return array - Array of Img objects representing the secondary images.
     */
    public function getSecondaryImages($id)
    {
        $select = "SELECT * FROM `car_images` WHERE car_id = $id";
        $result = $this->connect()->query($select);
        $resultImages = [];
        while ($row = $result->fetch()) {
            $resultImage = new Img();
            $resultImage->setImage_id_car($row['image_id']);
            $resultImage->setImage_url($row['image_url']);
            array_push($resultImages, $resultImage);
        }
        return $resultImages;
    }

    /**
     * Counts the number of images associated with a car.
     * 
     * @param int $id - The ID of the car.
     * @return Img - Img object representing the count of images.
     */
    public function countAllImages($id)
    {
        $select = "SELECT COUNT(image_url)
                    FROM car_images
                    WHERE `car_id` = $id";
        $result = $this->connect()->query($select);
        $resultfetch = $result->fetch();
        $count = new Img();
        $count->setCount($resultfetch['COUNT(image_url)']);
        return $count;
    }

    /**
     * Updates the URL of the main image associated with a car.
     * 
     * @param int $idCar - The ID of the car.
     * @param string $imageUrl - The new URL of the main image.
     */
    public function updateMainImage($idCar, $imageUrl)
    {
        $Update = "UPDATE `car_images` SET `image_url`='$imageUrl' WHERE `car_id` = $idCar  AND `is_main` = 1";
        $this->connect()->query($Update);
    }
}