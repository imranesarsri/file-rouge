<?php
include "./DB/Connect.php";
include "./Entity/Client.php";
class CLientsManagement extends Client
{

    public function clen($inputValue)
    {
        $inputValue = trim($inputValue);
        $inputValue = htmlspecialchars($inputValue, ENT_QUOTES, 'UTF-8');
        $inputValue = strip_tags($inputValue);
        $inputValue = strtolower($inputValue);
        return $inputValue;
    }
    // // $Full_name, $Phone_number, $Email, $Password, $Image_profile, $CIN

    public function validSingUp($Email)
    {

        $errorLogin = [];
        $selectEmail = "SELECT * FROM `client` WHERE `Email` = '$Email'";
        $resultEmail = DB::connect()->query($selectEmail);
        if ($resultEmail->rowCount() == 1) {
            array_push($errorLogin, 'The email has already been used');
        }

        return $errorLogin;

    }
    public function AddClient($Add)
    {
        $db = DB::connect();

        $Full_name = $this->clen($Add->getFull_name());
        $Phone_number = $this->clen($Add->getFull_name());
        $Email = $this->clen($Add->getEmail());
        $Password = $this->clen($Add->getPassword());
        $CIN = $this->clen($Add->getCIN());

        $sql = $db->prepare("INSERT INTO `client`(`full_name`, `phone_number`, `email`, `password`, `image_profile`, `admin`, `CIN`) 
        VALUES (:Na ,:Nu ,:Em ,:Ps ,:Im,:Ad ,:CIN)");

        $sql->execute([
            'Na' => $Full_name,
            'Nu' => $Phone_number,
            'Em' => $Email,
            'Ps' => md5($Password),
            'Im' => 'Uploads/Client/mageprofaile.jpg',
            'Ad' => '0',
            'CIN' => $CIN
        ]);

        return $db->lastInsertId();
    }

    public function logeIn($Email, $Password)
    {
        $passwHash = md5($Password);
        $sql = "SELECT * FROM `client` WHERE `email` = '$Email'";
        $result = DB::connect()->query($sql);
        if ($result->rowCount() == 1) {
            $resultfetch = $result->fetch();
            $passw = $resultfetch['password'];
            $admin = $resultfetch['admin'];
            if ($passw == $passwHash) {
                if ($admin == '1') {
                    return 'admin';
                } else {
                    return 'user';
                }
            } else {
                return 'password';
            }
        } else {
            return 'email';
        }
    }

    public function getByEmail($Email)
    {
        $sql = "SELECT * FROM `client` WHERE `email` = '$Email'";
        $result = DB::connect()->query($sql);
        $resultfetch = $result->fetch();
        $Client = new Client();
        $Client->setId_client($resultfetch['id_client']);
        $Client->setFull_name($resultfetch['full_name']);
        $Client->setPhone_number($resultfetch['phone_number']);
        $Client->setPassword($resultfetch['password']);
        $Client->setImage_profile($resultfetch['image_profile']);
        $Client->setCIN($resultfetch['CIN']);
        return $Client;
    }
}


// `id_client`, `full_name`, `phone_number`, `email`, `password`, `image_profile`, `admin`, `CIN` 

// INSERT INTO `client`(`id_client`, `full_name`, `phone_number`, `email`, `password`, `image_profile`, `admin`, `CIN`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')