<?php
include "./Clen/Clen.php";
include "./Entity/Reservation.php";

class ReservationManagement extends Reservation
{
    /**
     * Establishes a connection to the database.
     * 
     * @return PDO - The PDO database connection object.
     */
    public function connect()
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
     * Adds a reservation to the database.
     * 
     * @param Reservation $Add - The Reservation object to be added.
     * @param int $status_reservation - The status of the reservation.
     */
    public function AddReservation($Add, $status_reservation)
    {
        $sql = $this->connect()->prepare("INSERT INTO `reservation`( `car_id`, `id_client`, `date_reservation`, `date_end_reservation` ,`status_reservation`)
                    VALUES (:IdCar ,:IdClint ,:DateStart ,:DateEnd ,:Status)");
        $Car_id = Clen::Clen($Add->getCar_id());
        $Id_client = Clen::Clen($Add->getId_client());
        $Date_reservation = Clen::Clen($Add->getDate_reservation());
        $Date_end_reservation = Clen::Clen($Add->getDate_end_reservation());

        $sql->execute([
            'IdCar' => $Car_id,
            'IdClint' => $Id_client,
            'DateStart' => $Date_reservation,
            'DateEnd' => $Date_end_reservation,
            'Status' => $status_reservation,
        ]);
    }

    /**
     * Retrieves reservations from the database based on the status.
     * 
     * @param int $status - The status of the reservations to retrieve.
     * @return array - Array of Reservation objects representing the retrieved reservations.
     */
    public function getReservationWhere($status)
    {
        $select = "SELECT
                        reservation.car_id,reservation.id_reservation , reservation.id_client, reservation.date_reservation, reservation.date_end_reservation,
                        car.model, car.price, car.brand,
                        client.full_name, client.phone_number, client.email, client.image_profile, client.CIN,
                        car_images.image_url
                    FROM
                        reservation
                        INNER JOIN car ON reservation.car_id = car.car_id
                        INNER JOIN client ON reservation.id_client = client.id_client
                        INNER JOIN car_images ON car.car_id = car_images.car_id
                    WHERE
                        car_images.is_main = 1
                        AND reservation.status_reservation = $status";

        $results = $this->connect()->query($select);
        $reserved = [];
        while ($row = $results->fetch()) {
            $reserv = new Reservation();
            $reserv->setId_reservation($row['id_reservation']);
            $reserv->setId_client($row['id_client']);
            $reserv->setCar_id($row['car_id']);
            $reserv->setDate_reservation($row['date_reservation']);
            $reserv->setDate_end_reservation($row['date_end_reservation']);
            $reserv->setCar_model($row['model']);
            $reserv->setCar_brand($row['brand']);
            $reserv->setCar_price($row['price']);
            $reserv->setClient_full_name($row['full_name']);
            $reserv->setClient_phone_number($row['phone_number']);
            $reserv->setClient_email($row['email']);
            $reserv->setClient_image_profile($row['image_profile']);
            $reserv->setClient_CIN($row['CIN']);
            $reserv->setCar_image_url($row['image_url']);
            array_push($reserved, $reserv);
        }
        return $reserved;
    }

    /**
     * Accepts a reservation by updating its status.
     * 
     * @param int $id_reservation - The ID of the reservation to accept.
     */
    public function AcceptReservation($id_reservation)
    {
        $Update = "UPDATE `reservation` SET `status_reservation`='1' WHERE `id_reservation` = '$id_reservation'";
        $this->connect()->query($Update);
    }

    /**
     * Cancels a reservation by deleting it from the database.
     * 
     * @param int $id_reservation - The ID of the reservation to cancel.
     */
    public function cancelReservation($id_reservation)
    {
        $DELETE = "DELETE FROM `reservation` WHERE `id_reservation` = '$id_reservation'";
        $this->connect()->query($DELETE);
    }
}