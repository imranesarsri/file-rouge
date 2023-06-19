<?php
class Client
{
    // Client properties
    private $id_client; // Private property to store the client ID
    private $full_name; // Private property to store the client's full name
    private $phone_number; // Private property to store the client's phone number
    private $email; // Private property to store the client's email
    private $password; // Private property to store the client's password
    private $image_profile; // Private property to store the client's image profile
    private $admin; // Private property to indicate if the client is an admin
    private $CIN; // Private property to store the client's CIN (identification number)
    private $points; // Private property to store the client's points

    public function getId_client()
    {
        return $this->id_client;
    }
    // Getter method to retrieve the client ID

    public function getFull_name()
    {
        return $this->full_name;
    }
    // Getter method to retrieve the client's full name

    public function getPhone_number()
    {
        return $this->phone_number;
    }
    // Getter method to retrieve the client's phone number

    public function getEmail()
    {
        return $this->email;
    }
    // Getter method to retrieve the client's email

    public function getPassword()
    {
        return $this->password;
    }
    // Getter method to retrieve the client's password

    public function getImage_profile()
    {
        return $this->image_profile;
    }
    // Getter method to retrieve the client's image profile

    public function getAdmin()
    {
        return $this->admin;
    }
    // Getter method to retrieve the admin status of the client

    public function getCIN()
    {
        return $this->CIN;
    }
    // Getter method to retrieve the client's CIN (identification number)

    public function getPoints()
    {
        return $this->points;
    }
    // Getter method to retrieve the client's points

    public function setId_client($Id_client)
    {
        $this->id_client = $Id_client;
    }
    // Setter method to set the client ID

    public function setFull_name($Full_name)
    {
        $this->full_name = $Full_name;
    }
    // Setter method to set the client's full name

    public function setPhone_number($Phone_number)
    {
        $this->phone_number = $Phone_number;
    }
    // Setter method to set the client's phone number

    public function setEmail($Email)
    {
        $this->email = $Email;
    }
    // Setter method to set the client's email

    public function setPassword($Password)
    {
        $this->password = $Password;
    }
    // Setter method to set the client's password

    public function setImage_profile($Image_profile)
    {
        $this->image_profile = $Image_profile;
    }
    // Setter method to set the client's image profile

    public function setAdmin($Admin)
    {
        $this->admin = $Admin;
    }
    // Setter method to set the admin status of the client

    public function setCIN($CIN)
    {
        $this->CIN = $CIN;
    }
    // Setter method to set the client's CIN (identification number)

    public function setPoints($Points)
    {
        $this->points = $Points;
    }
    // Setter method to set the client's points
}