<?php
class Car
{
    private $car_id; // Private property to store the car ID
    private $model; // Private property to store the car model
    private $year; // Private property to store the car year
    private $price; // Private property to store the car price
    private $color; // Private property to store the car color
    private $brand; // Private property to store the car brand
    private $mileage; // Private property to store the car mileage
    private $status; // Private property to store the car status
    private $engine_capacity; // Private property to store the car engine capacity
    private $fuel_type; // Private property to store the car fuel type
    private $transmission_type; // Private property to store the car transmission type
    private $main_img; // Private property to store the main image of the car

    public function getCar_id()
    {
        return $this->car_id;
    }
    // Getter method to retrieve the car ID

    public function getModel()
    {
        return $this->model;
    }
    // Getter method to retrieve the car model

    public function getYear()
    {
        return $this->year;
    }
    // Getter method to retrieve the car year

    public function getPrice()
    {
        return $this->price;
    }
    // Getter method to retrieve the car price

    public function getColor()
    {
        return $this->color;
    }
    // Getter method to retrieve the car color

    public function getBrand()
    {
        return $this->brand;
    }
    // Getter method to retrieve the car brand

    public function getMileage()
    {
        return $this->mileage;
    }
    // Getter method to retrieve the car mileage

    public function getStatus()
    {
        return $this->status;
    }
    // Getter method to retrieve the car status

    public function getEngine_capacity()
    {
        return $this->engine_capacity;
    }
    // Getter method to retrieve the car engine capacity

    public function getTransmission_type()
    {
        return $this->transmission_type;
    }
    // Getter method to retrieve the car transmission type

    public function getFuel_type()
    {
        return $this->fuel_type;
    }
    // Getter method to retrieve the car fuel type

    public function getMain_img()
    {
        return $this->main_img;
    }
    // Getter method to retrieve the main image of the car

    public function setCar_id($Car_id)
    {
        return $this->car_id = $Car_id;
    }
    // Setter method to set the car ID

    public function setModel($Model)
    {
        return $this->model = $Model;
    }
    // Setter method to set the car model

    public function setYear($Year)
    {
        return $this->year = $Year;
    }
    // Setter method to set the car year

    public function setPrice($Price)
    {
        return $this->price = $Price;
    }
    // Setter method to set the car price

    public function setColor($Color)
    {
        return $this->color = $Color;
    }
    // Setter method to set the car color

    public function setBrand($Brand)
    {
        return $this->brand = $Brand;
    }
    // Setter method to set the car brand

    public function setMileage($Mileage)
    {
        return $this->mileage = $Mileage;
    }
    // Setter method to set the car mileage

    public function setStatus($Status)
    {
        return $this->status = $Status;
    }
    // Setter method to set the car status

    public function setEngine_capacity($Engine_capacity)
    {
        return $this->engine_capacity = $Engine_capacity;
    }
    // Setter method to set the car engine capacity

    public function setTransmission_type($Transmission_type)
    {
        return $this->transmission_type = $Transmission_type;
    }
    // Setter method to set the car transmission type

    public function setFuel_type($Fuel_type)
    {
        return $this->fuel_type = $Fuel_type;
    }
    // Setter method to set the car fuel type

    public function setMain_img($Main_img)
    {
        return $this->main_img = $Main_img;
    }
    // Setter method to set the main image of the car
}