<?php

class Client
{
    private $id_client;
    private $full_name;
    private $phone_number;
    private $email;
    private $password;
    private $image_profile;
    private $admin;
    private $CIN;

    public function getId_client()
    {
        return $this->id_client;
    }

    public function getFull_name()
    {
        return $this->full_name;
    }

    public function getPhone_number()
    {
        return $this->phone_number;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function getImage_profile()
    {
        return $this->image_profile;
    }

    public function getAdmin()
    {
        return $this->admin;
    }

    public function getCIN()
    {
        return $this->CIN;
    }


    public function setId_client($Id_client)
    {
        $this->id_client = $Id_client;
    }

    public function setFull_name($Full_name)
    {
        $this->full_name = $Full_name;
    }

    public function setPhone_number($Phone_number)
    {
        $this->phone_number = $Phone_number;
    }

    public function setEmail($Email)
    {
        $this->email = $Email;
    }
    public function setPassword($Password)
    {
        $this->password = $Password;
    }

    public function setImage_profile($Image_profile)
    {
        $this->image_profile = $Image_profile;
    }

    public function setAdmin($Admin)
    {
        $this->admin = $Admin;
    }
    public function setCIN($CIN)
    {
        $this->CIN = $CIN;
    }
}

// `id_client`, `full_name`, `phone_number`, `email`, `password`, `image_profile`, `admin`, `CIN`