<?php
class Seled
{
    // Seled properties

    private $id_sale; // Private property to store the sale ID
    private $car_id; // Private property to store the car ID
    private $id_client; // Private property to store the client ID
    private $date_of_sale; // Private property to store the date of sale

    public function getId_sale()
    {
        return $this->id_sale;
    }
    // Getter method to retrieve the sale ID

    public function getCar_id()
    {
        return $this->car_id;
    }
    // Getter method to retrieve the car ID

    public function getId_client()
    {
        return $this->id_client;
    }
    // Getter method to retrieve the client ID

    public function getDate_of_sale()
    {
        return $this->date_of_sale;
    }
    // Getter method to retrieve the date of sale

    public function setId_sale($Id_sale)
    {
        $this->id_sale = $Id_sale;
    }
    // Setter method to set the sale ID

    public function setCar_id($Car_id)
    {
        $this->car_id = $Car_id;
    }
    // Setter method to set the car ID

    public function setId_client($Id_client)
    {
        $this->id_client = $Id_client;
    }
    // Setter method to set the client ID

    public function setDate_of_sale($Date_of_sale)
    {
        $this->date_of_sale = $Date_of_sale;
    }
    // Setter method to set the date of sale
}