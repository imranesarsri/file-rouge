<?php
include "./Entity/Car.php";

class CarsManagement extends Car
{
    // Function to establish a database connection
    public function connect()
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=file_rouge', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
        } catch (PDOException $e) {
            die("error: not connected" . $e->getMessage());
        }
        return $db;
    }

    // Function to get all car data
    public function getAll()
    {
        $select = "SELECT car.car_id, `model`, `year`, `price`, `color`, `brand`, `fuel_type`, `transmission_type`, `mileage`, `status`, `engine_capacity`, `image_url`
        FROM `car` 
        JOIN car_images 
        ON car.car_id = car_images.car_id
        WHERE car_images.is_main = 1 AND car.status = ( 'available' OR 'reserved');";
        $results = $this->connect()->query($select);
        $Cars = [];
        while ($row = $results->fetch()) {
            $Car = new Car();
            $Car->setCar_id($row['car_id']);
            $Car->setModel($row['model']);
            $Car->setYear($row['year']);
            $Car->setPrice($row['price']);
            $Car->setColor($row['color']);
            $Car->setBrand($row['brand']);
            $Car->setMileage($row['mileage']);
            $Car->setStatus($row['status']);
            $Car->setEngine_capacity($row['engine_capacity']);
            $Car->setFuel_type($row['fuel_type']);
            $Car->setTransmission_type($row['transmission_type']);
            $Car->setMain_img($row['image_url']);
            array_push($Cars, $Car);
        }
        return $Cars;
    }

    // Function to get car data by ID
    public function getDataById($id)
    {
        $select = "SELECT car.car_id, `model`, `year`, `price`, `color`, `brand`, `fuel_type`, `transmission_type`, `mileage`, `status`, `engine_capacity`, `image_url`
        FROM `car` 
        JOIN car_images 
        ON car.car_id = car_images.car_id
        WHERE car_images.is_main = 1
        AND car.car_id = $id";
        $results = $this->connect()->query($select);
        $resultfetch = $results->fetch();
        $Car = new Car();
        $Car->setCar_id($resultfetch['car_id']);
        $Car->setModel($resultfetch['model']);
        $Car->setYear($resultfetch['year']);
        $Car->setPrice($resultfetch['price']);
        $Car->setColor($resultfetch['color']);
        $Car->setBrand($resultfetch['brand']);
        $Car->setMileage($resultfetch['mileage']);
        $Car->setStatus($resultfetch['status']);
        $Car->setEngine_capacity($resultfetch['engine_capacity']);
        $Car->setFuel_type($resultfetch['fuel_type']);
        $Car->setTransmission_type($resultfetch['transmission_type']);
        $Car->setMain_img($resultfetch['image_url']);
        return $Car;
    }

    // Function to clean input values
    public function clen($inputValue)
    {
        $inputValue = trim($inputValue);
        $inputValue = htmlspecialchars($inputValue, ENT_QUOTES, 'UTF-8');
        $inputValue = strip_tags($inputValue);
        $inputValue = strtolower($inputValue);
        return $inputValue;
    }

    // Function to add a new car
    public function AddCar($Add)
    {
        $db = $this->connect();
        $sql = $db->prepare("INSERT INTO car (`model`, `year`, `price`, `color`, `brand`, `fuel_type`, `transmission_type`, `mileage`, `engine_capacity`) 
            VALUES (:Mo, :Ye, :Pr, :Co, :Br, :Fu, :Tr, :Mi, :En)");
        $model = $this->clen($Add->getModel());
        $year = $this->clen($Add->getYear());
        $price = $this->clen($Add->getPrice());
        $color = $this->clen($Add->getColor());
        $brand = $this->clen($Add->getBrand());
        $fuel_type = $this->clen($Add->getFuel_type());
        $transmission_type = $this->clen($Add->getTransmission_type());
        $mileage = $this->clen($Add->getMileage());
        $engine_capacity = $this->clen($Add->getEngine_capacity());

        $sql->execute([
            'Mo' => $model,
            'Ye' => $year,
            'Pr' => $price,
            'Co' => $color,
            'Br' => $brand,
            'Fu' => $fuel_type,
            'Tr' => $transmission_type,
            'Mi' => $mileage,
            'En' => $engine_capacity
        ]);

        return $db->lastInsertId();
    }

    // Function to delete a car
    public function deleteCar($id)
    {
        $delete = "DELETE FROM `car` WHERE `car_id` = $id";
        $this->connect()->query($delete);
    }

    // Function to update car data
    public function Update($id, $Model, $Year, $Price, $color, $Brand, $fuel_type, $Transmission_Type, $Mileage, $Status, $Engine_Capacity)
    {
        $Update = "UPDATE `car` SET `model`='$Model',`year`='$Year',`price`='$Price',
                                        `color`='$color',`brand`='$Brand',`fuel_type`='$fuel_type',
                                        `transmission_type`='$Transmission_Type',`mileage`='$Mileage',
                                        `status`='$Status',`engine_capacity`='$Engine_Capacity' 
                    WHERE `car_id` = $id";
        $this->connect()->query($Update);
    }

    // Function to search for cars based on a WHERE condition
    public function searchWhere($Where)
    {
        $select = "SELECT car.car_id, `model`, `year`, `price`, `color`, `brand`, `fuel_type`, `transmission_type`, `mileage`, `status`, `engine_capacity`, `image_url`
                    FROM `car` 
                    JOIN car_images 
                    ON car.car_id = car_images.car_id
                    WHERE car_images.is_main = 1 $Where";
        $results = $this->connect()->query($select);
        $Cars = [];
        while ($row = $results->fetch()) {
            $Car = new Car();
            $Car->setCar_id($row['car_id']);
            $Car->setModel($row['model']);
            $Car->setYear($row['year']);
            $Car->setPrice($row['price']);
            $Car->setColor($row['color']);
            $Car->setBrand($row['brand']);
            $Car->setMileage($row['mileage']);
            $Car->setStatus($row['status']);
            $Car->setEngine_capacity($row['engine_capacity']);
            $Car->setFuel_type($row['fuel_type']);
            $Car->setTransmission_type($row['transmission_type']);
            $Car->setMain_img($row['image_url']);
            array_push($Cars, $Car);
        }
        return $Cars;
    }

    // Function to update the status of a car
    public function updateStatus($status, $CarId)
    {
        $Update = "UPDATE `car` SET `status`='$status' WHERE `car_id` = $CarId";
        $this->connect()->query($Update);
    }


    // Function to get all car data
    public function getAllCarSales()
    {
        $select = "SELECT car.car_id, `model`, `year`, `price`, `color`, `brand`, `fuel_type`, `transmission_type`, `mileage`, `status`, `engine_capacity`, `image_url`
            FROM `car` 
            JOIN car_images 
            ON car.car_id = car_images.car_id
            WHERE car_images.is_main = 1 AND car.status = 'sold'";
        $results = $this->connect()->query($select);
        $Cars = [];
        while ($row = $results->fetch()) {
            $Car = new Car();
            $Car->setCar_id($row['car_id']);
            $Car->setModel($row['model']);
            $Car->setYear($row['year']);
            $Car->setPrice($row['price']);
            $Car->setColor($row['color']);
            $Car->setBrand($row['brand']);
            $Car->setMileage($row['mileage']);
            $Car->setStatus($row['status']);
            $Car->setEngine_capacity($row['engine_capacity']);
            $Car->setFuel_type($row['fuel_type']);
            $Car->setTransmission_type($row['transmission_type']);
            $Car->setMain_img($row['image_url']);
            array_push($Cars, $Car);
        }
        return $Cars;
    }
}