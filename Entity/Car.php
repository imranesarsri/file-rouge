<?php

class Car
{
    private $car_id;
    private $model;
    private $type;
    private $year;
    private $price;
    private $color;
    private $brand;
    private $mileage;
    private $status;
    private $engine_capacity;
    private $fuel_type;
    private $transmission_type;
    private $main_img;

    public function getCar_id()
    {
        return $this->car_id;
    }
    public function getModel()
    {
        return $this->model;
    }
    public function getType()
    {
        return $this->type;
    }
    public function getYear()
    {
        return $this->year;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function getBrand()
    {
        return $this->brand;
    }
    public function getMileage()
    {
        return $this->mileage;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function getEngine_capacity()
    {
        return $this->engine_capacity;
    }
    public function getTransmission_type()
    {
        return $this->transmission_type;
    }
    public function getFuel_type()
    {
        return $this->fuel_type;
    }
    public function getMain_img()
    {
        return $this->main_img;
    }


    public function setCar_id($Car_id)
    {
        return $this->car_id = $Car_id;
    }
    public function setModel($Model)
    {
        return $this->model = $Model;
    }
    public function setType($Type)
    {
        return $this->type = $Type;
    }
    public function setYear($Year)
    {
        return $this->year = $Year;
    }
    public function setPrice($Price)
    {
        return $this->price = $Price;
    }
    public function setColor($Color)
    {
        return $this->color = $Color;
    }
    public function setBrand($Brand)
    {
        return $this->brand = $Brand;
    }
    public function setMileage($Mileage)
    {
        return $this->mileage = $Mileage;
    }
    public function setStatus($Status)
    {
        return $this->status = $Status;
    }
    public function setEngine_capacity($Engine_capacity)
    {
        return $this->engine_capacity = $Engine_capacity;
    }
    public function setTransmission_type($Transmission_type)
    {
        return $this->transmission_type = $Transmission_type;
    }
    public function setFuel_type($Fuel_type)
    {
        return $this->fuel_type = $Fuel_type;
    }
    public function setMain_img($Main_img)
    {
        return $this->main_img = $Main_img;
    }
}