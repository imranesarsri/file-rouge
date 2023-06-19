<?php
class Reservation
{

    // Reservation properties
    private $id_reservation; // Private property to store the reservation ID
    private $car_id; // Private property to store the car ID
    private $id_client; // Private property to store the client ID
    private $date_reservation; // Private property to store the reservation date
    private $date_end_reservation; // Private property to store the end date of the reservation
    private $status_reservation; // Private property to store the status of the reservation

    // car table properties
    private $car_model; // Private property to store the car model
    private $car_price; // Private property to store the car price
    private $car_brand; // Private property to store the car brand

    // properties of the client table
    private $client_full_name; // Private property to store the client's full name
    private $client_phone_number; // Private property to store the client's phone number
    private $client_email; // Private property to store the client's email
    private $client_image_profile; // Private property to store the client's profile image
    private $client_CIN; // Private property to store the client's CIN (identification number)

    // properties of the car image table (car_images)
    private $car_image_url; // Private property to store the URL of the car image


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

    public function getDate_reservation()
    {
        return $this->date_reservation;
    }
    // Getter method to retrieve the reservation date

    public function getDate_end_reservation()
    {
        return $this->date_end_reservation;
    }
    // Getter method to retrieve the end date of the reservation

    public function getstatus_reservation()
    {
        return $this->status_reservation;
    }
    // Getter method to retrieve the status of the reservation

    public function getId_reservation()
    {
        return $this->id_reservation;
    }
    // Getter method to retrieve the reservation ID


    public function getCar_model()
    {
        return $this->car_model;
    }
    // Getter method to retrieve the car model

    public function getCar_price()
    {
        return $this->car_price;
    }
    // Getter method to retrieve the car price

    public function getCar_brand()
    {
        return $this->car_brand;
    }
    // Getter method to retrieve the car brand


    public function getClient_full_name()
    {
        return $this->client_full_name;
    }
    // Getter method to retrieve the client's full name

    public function getClient_phone_number()
    {
        return $this->client_phone_number;
    }
    // Getter method to retrieve the client's phone number

    public function getClient_email()
    {
        return $this->client_email;
    }
    // Getter method to retrieve the client's email

    public function getClient_image_profile()
    {
        return $this->client_image_profile;
    }
    // Getter method to retrieve the client's profile image

    public function getClient_CIN()
    {
        return $this->client_CIN;
    }
    // Getter method to retrieve the client's CIN (identification number)

    public function getCar_image_url()
    {
        return $this->car_image_url;
    }
    // Getter method to retrieve the URL of the car image



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

    public function setDate_reservation($Date_reservation)
    {
        $this->date_reservation = $Date_reservation;
    }
    // Setter method to set the reservation date

    public function setDate_end_reservation($Date_end_reservation)
    {
        $this->date_end_reservation = $Date_end_reservation;
    }
    // Setter method to set the end date of the reservation

    public function setStatus_reservation($Status_reservation)
    {
        $this->status_reservation = $Status_reservation;
    }
    // Setter method to set the status of the reservation

    public function setId_reservation($Id_reservation)
    {
        $this->id_reservation = $Id_reservation;
    }
    // Setter method to set the reservation ID

    public function setCar_model($Car_model)
    {
        $this->car_model = $Car_model;
    }
    // Setter method to set the car model

    public function setCar_price($Car_price)
    {
        $this->car_price = $Car_price;
    }
    // Setter method to set the car price

    public function setCar_brand($Car_brand)
    {
        $this->car_brand = $Car_brand;
    }
    // Setter method to set the car brand

    public function setClient_full_name($Client_full_name)
    {
        $this->client_full_name = $Client_full_name;
    }
    // Setter method to set the client's full name

    public function setClient_phone_number($Client_phone_number)
    {
        $this->client_phone_number = $Client_phone_number;
    }
    // Setter method to set the client's phone number

    public function setClient_email($Client_email)
    {
        $this->client_email = $Client_email;
    }
    // Setter method to set the client's email

    public function setClient_image_profile($Client_image_profile)
    {
        $this->client_image_profile = $Client_image_profile;
    }
    // Setter method to set the client's profile image

    public function setClient_CIN($Client_CIN)
    {
        $this->client_CIN = $Client_CIN;
    }
    // Setter method to set the client's CIN (identification number)

    public function setCar_image_url($Car_image_url)
    {
        $this->car_image_url = $Car_image_url;
    }
    // Setter method to set the URL of the car image
}