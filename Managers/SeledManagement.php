<?php
include "./Entity/Seled.php";

class SeledManagement extends Seled
{
    /**
     * This function establishes a connection to the database.
     *
     * @return PDO
     */
    public function connect()
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=file_rouge', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
        } catch (PDOException $e) {
            die("error : not connected" . $e->getMessage());
        }
        return $db;
    }

    /**
     * This function adds a new sale to the database.
     *
     * @param $Add
     */
    public function addSeled($Add)
    {
        $sql = $this->connect()->prepare("INSERT INTO seled (`car_id`, `id_client`, `date_of_sale`) 
        VALUES (:idCar ,:idClient ,:date )");
        $sql->execute([
            'idCar' => $Add->getCar_id(),
            'idClient' => $Add->getId_client(),
            'date' => $Add->getDate_of_sale(),
        ]);
    }
}