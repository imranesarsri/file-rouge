<?php
include "./Entity/Client.php";

class CLientsManagement extends Client
{
    /**
     * Establishes a connection to the database.
     * 
     * @return PDO - The PDO database connection object.
     */
    public static function connect()
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=file_rouge', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
        } catch (PDOException $e) {
            die("error : not connecte" . $e->getMessage());
        }
        return $db;
    }

    /**
     * Cleans and sanitizes an input value.
     * 
     * @param string $InputValue - The input value to be cleaned.
     * @return string - The cleaned input value.
     */
    public function clen($InputValue)
    {
        $InputValue = trim($InputValue);
        $InputValue = htmlspecialchars($InputValue, ENT_QUOTES, 'UTF-8');
        $InputValue = strip_tags($InputValue);
        $InputValue = strtolower($InputValue);
        return $InputValue;
    }

    /**
     * Validates the signup process by checking if the email has already been used.
     * 
     * @param string $Email - The email to be validated.
     * @return string - Error message indicating the validation result.
     */
    public function validSingUp($Email)
    {
        $errorLogin = '';
        $selectEmail = "SELECT * FROM `client` WHERE `Email` = '$Email'";
        $resultEmail = $this->connect()->query($selectEmail);
        if ($resultEmail->rowCount() == 1) {
            $errorLogin .= 'The email has already been used';
        }
        return $errorLogin;
    }

    /**
     * Adds a client to the database.
     * 
     * @param Client $Add - The Client object to be added.
     * @param int $Admin - Flag indicating whether the client is an admin (1) or not (0).
     * @return int - The ID of the newly added client.
     */
    public function AddClient($Add, $Admin)
    {
        $db = $this->connect();

        $Full_name = $this->clen($Add->getFull_name());
        $Phone_number = $this->clen($Add->getPhone_number());
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
            'Ad' => $Admin,
            'CIN' => $CIN
        ]);

        return $db->lastInsertId();
    }

    /**
     * Logs in a client by checking the provided email and password.
     * 
     * @param string $Email - The email of the client.
     * @param string $Password - The password of the client.
     * @return string - The login result: 'admin' for admin login, 'user' for user login, 'password' for incorrect password, 'email' for non-existing email.
     */
    public function logeIn($Email, $Password)
    {
        $passwHash = md5($Password);
        $sql = "SELECT * FROM `client` WHERE `email` = '$Email'";
        $result = $this->connect()->query($sql);
        if ($result->rowCount() >= 1) {
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

    /**
     * Retrieves a client from the database based on the provided email.
     * 
     * @param string $Email - The email of the client to retrieve.
     * @return Client - The retrieved Client object.
     */
    public function getByEmail($Email)
    {
        $sql = "SELECT * FROM `client` WHERE `email` = '$Email'";
        $result = $this->connect()->query($sql);
        $resultfetch = $result->fetch();
        $Client = new Client();
        $Client->setId_client($resultfetch['id_client']);
        $Client->setFull_name($resultfetch['full_name']);
        $Client->setPhone_number($resultfetch['phone_number']);
        $Client->setPassword($resultfetch['password']);
        $Client->setImage_profile($resultfetch['image_profile']);
        $Client->setCIN($resultfetch['CIN']);
        $Client->setPoints($resultfetch['points']);
        return $Client;
    }

    /**
     * Retrieves all users (clients) from the database based on the admin flag.
     * 
     * @param int $Admin - Flag indicating whether the users are admin (1) or not (0).
     * @return array - An array of Client objects representing the retrieved users.
     */
    public function gitAllUsers($Admin)
    {
        $sql = "SELECT * FROM `client` WHERE `admin` = '$Admin'";
        $result = $this->connect()->query($sql);
        $Users = [];
        while ($row = $result->fetch()) {
            $User = new Client();
            $User->setId_client($row['id_client']);
            $User->setFull_name($row['full_name']);
            $User->setPhone_number($row['phone_number']);
            $User->setEmail($row['email']);
            $User->setImage_profile($row['image_profile']);
            $User->setCIN($row['CIN']);
            $User->setPoints($row['points']);
            array_push($Users, $User);
        }
        return $Users;
    }

    /**
     * Retrieves a client from the database based on the provided client ID.
     * 
     * @param int $id_client - The ID of the client to retrieve.
     * @return Client - The retrieved Client object.
     */
    public function gitClientById($id_client)
    {
        $sql = "SELECT * FROM `client` WHERE `id_client` = $id_client";
        $result = $this->connect()->query($sql);
        $resultfetch = $result->fetch();
        $Client = new Client();
        $Client->setFull_name($resultfetch['full_name']);
        $Client->setEmail($resultfetch['email']);
        $Client->setPhone_number($resultfetch['phone_number']);
        $Client->setImage_profile($resultfetch['image_profile']);
        $Client->setCIN($resultfetch['CIN']);
        $Client->setPoints($resultfetch['points']);
        return $Client;
    }

    /**
     * Increases the points of a client by 1.
     * 
     * @param int $id_client - The ID of the client.
     */
    public function AddPoints($id_client)
    {
        $Update = "UPDATE `client` SET `points`=points + 1  WHERE `id_client`  = '$id_client'";
        $this->connect()->query($Update);
    }

    /**
     * Decreases the points of a client by 1.
     * 
     * @param int $id_client - The ID of the client.
     */
    public function decrementPoints($points, $id_client)
    {
        $Update = "UPDATE `client` SET `points`=points - '$points'  WHERE `id_client`  = '$id_client'";
        $this->connect()->query($Update);
    }


}