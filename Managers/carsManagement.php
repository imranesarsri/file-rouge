<?php
include "./DB/Connect.php";
include "./Entity/Car.php";
class CarsManagement extends Car
{

    // select All data
    public function getAllByType($type)
    {
        $select = " SELECT car.car_id , `model`, `type`, `year`, `price`, `color`, `brand`,`fuel_type`, `transmission_type`, `mileage`, `status`, `engine_capacity`,`image_url`
                    FROM `car` 
                    JOIN car_images 
                    ON car.car_id = car_images.car_id
                    WHERE car_images.is_main = 1
                    AND car.type = '$type'";
        $results = DB::connect()->query($select);
        $Cars = [];
        while ($row = $results->fetch()) {
            $Car = new Car();
            $Car->setCar_id($row['car_id']);
            $Car->setModel($row['model']);
            $Car->setType($row['type']);
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

    // select data by Id
    public function getDataById($id)
    {
        $select = "SELECT car.car_id , `model`, `type`, `year`, `price`, `color`, `brand`,`fuel_type`, `transmission_type`, `mileage`, `status`, `engine_capacity`,`image_url`
        FROM `car` 
        JOIN car_images 
        ON car.car_id = car_images.car_id
        WHERE car_images.is_main = 1
        AND car.car_id = $id
        ";
        $results = DB::connect()->query($select);
        $resultfetch = $results->fetch();
        $Car = new Car();
        $Car->setCar_id($resultfetch['car_id']);
        $Car->setModel($resultfetch['model']);
        $Car->setType($resultfetch['type']);
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

    public function clen($inputValue)
    {
        $inputValue = trim($inputValue);
        $inputValue = htmlspecialchars($inputValue, ENT_QUOTES, 'UTF-8');
        $inputValue = strip_tags($inputValue);

        return $inputValue;
    }

    public function AddCar($Add)
    {
        $db = DB::connect();
        $sql = $db->prepare("INSERT INTO car (`model`, `type`, `year`, `price`, `color`, `brand`,`fuel_type`, `transmission_type`, `mileage`, `engine_capacity`) 
            VALUES (:Mo ,:Ty ,:Ye ,:Pr ,:Co ,:Br,:Fu,:Tr ,:Mi ,:En)");

        $model = $this->clen($Add->getModel());
        $type = $this->clen($Add->getType());
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
            'Ty' => $type,
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


    public function deleteCar($id)
    {
        $delete = "DELETE FROM `car` WHERE `car_id` = $id ";
        DB::connect()->query($delete);
    }

    public function Update($id, $Model, $Type, $Year, $Price, $color, $Brand, $fuel_type, $Transmission_Type, $Mileage, $Status, $Engine_Capacity)
    {
        $Update = "UPDATE `car` SET   `model`='$Model',`type`='$Type',`year`='$Year',`price`='$Price',
                                        `color`='$color',`brand`='$Brand',`fuel_type`='$fuel_type',
                                        `transmission_type`='$Transmission_Type',`mileage`='$Mileage',
                                        `status`='$Status',`engine_capacity`='$Engine_Capacity' 
                    WHERE `car_id` = $id";
        DB::connect()->query($Update);
    }


    // shech

    public function searchWhere($Type, $Where)
    {
        $select = " SELECT car.car_id , `model`, `type`, `year`, `price`, `color`, `brand`,`fuel_type`, `transmission_type`, `mileage`, `status`, `engine_capacity`,`image_url`
                    FROM `car` 
                    JOIN car_images 
                    ON car.car_id = car_images.car_id
                    WHERE car_images.is_main = 1
                    AND car.type = '$Type' $Where";
        $results = DB::connect()->query($select);
        $Cars = [];
        while ($row = $results->fetch()) {
            $Car = new Car();
            $Car->setCar_id($row['car_id']);
            $Car->setModel($row['model']);
            $Car->setType($row['type']);
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