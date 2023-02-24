<?php
include_once '../database/dbConnect.php';

class rezRep
    {
    private $connect;

    function __construct()
        {
        $conn = new dbConnection;
        $this->connect = $conn->startConnection();
        }


    function insertRezervimin($rezervimet)
        {
        $conn = $this->connect;

        $data = $rezervimet->getRezervimiData();
        $orari = $rezervimet->getRezervimiOrari();
        $persona = $rezervimet->getRezervimiPersona();
        $filmi = $rezervimet->getRezervimiFilmi();
        $qyteti = $rezervimet->getRezervimiQyteti();

        $sql = "INSERT INTO rezervimet (data,orari,persona,filmi,qyteti) VALUES (?,?,?,?,?)";

        $statement = $conn->prepare($sql);
        $statement->execute([$data, $orari, $persona, $filmi, $qyteti]);
        
        }
    function getAllRezervimet()
        {
        $conn = $this->connect;

        $sql = "SELECT * FROM rezervimet";
        $statement = $conn->query($sql);
        $rez = $statement->fetchAll();

        return $rez;
        }
    function getRezervimetById($id)
        {
        $conn = $this->connect;

        $sql = "SELECT * FROM rezervimet WHERE id='$id'";
        $statement = $conn->query($sql);
        $rez = $statement->fetch();

        return $rez;
        }

    function perditesoRezervimin($id, $data, $orari, $persona, $filmi, $qyteti)
        {
        $conn = $this->connect;

        $sql = "UPDATE rezervimet SET data=?,orari=?,persona=?,filmi=?,qyteti=? where id=?";

        $statement = $conn->prepare($sql);


        $statement->execute([$data, $orari, $persona, $filmi, $qyteti, $id]);
        echo "<script> alert('Rezervimi eshte perditesuar me sukses!') </script>";
        }
    function deleteRezerviminById($id)
        {
        $conn = $this->connect;

        $sql = "DELETE FROM rezervimet WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        echo "<script> alert('Rezervimi eshte fshire me sukses!') </script>";
        }
        public function getReservationsByUserId($userId)
{
    $conn = $this->connect;

    $sql = "SELECT * FROM rezervimet WHERE id = $userId";
    $statement = $conn->prepare($sql);
    $statement->execute(['id' => $userId]);

    $reservations = [];
    while ($row = $statement->fetch()) {
        $reservation = [
            'id' => $row['id'],
            'data' => $row['data'],
            'orari' => $row['orari'],
            'persona' => $row['persona'],
            'filmi' => $row['filmi'],
            'qyteti' => $row['qyteti']
        ];
        $reservations[] = $reservation;
    }

    return $reservations;
}
    }
?>