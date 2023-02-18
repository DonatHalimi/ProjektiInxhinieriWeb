<?php
include '../database/dbConnect.php';

class rezRep{
    private $connection;

    function __construct()
    {
        $conn = new dbConnect;
        $this->connection = $conn->startConnection();
    }


    function insertRezervimin($rezervimet)
    {
        $conn = $this->connection;

        $id = $rezervimet->getId();
        $data = $rezervimet->getData();
        $orari = $rezervimet->getOrari();
        $persona = $rezervimet->getPersona();
        $filmi = $rezervimet->getFilmi();
        $qyteti = $rezervimet->getQyteti();

        $sql = "INSERT INTO rezervimet (id,data,orari,persona,filmi,qyteti) VALUES (?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);
        $statement->execute([$id, $data, $orari, $persona, $filmi, $qyteti]);
        echo "<script> alert('Rezervimi eshte insertuar me sukses!') </script>";
    }
    function getAllRezervimet()
    {
        $conn = $this->connection;

        $sql = "SELECT * FROM rezervimet";
        $statement = $conn->query($sql);
        $rez = $statement->fetchAll();

        return $rez;
    }
    function getRezervimetById($id)
    {
        $conn = $this->connection;

        $sql = "SELECT * FROM rezervimet WHERE id='$id'";
        $statement = $conn->query($sql);
        $rez = $statement->fetch();

        return $rez;
    }

    function perditesoRezervimin($id, $data, $orari, $persona, $filmi, $qyteti)
    {
        $conn = $this->connection;

        $sql = "UPDATE rezervimet SET data=?,orari=?,persona=?,filmi=?,qyteti=? where id=?";

        $statement = $conn->prepare($sql);


        $statement->execute([$data, $orari, $persona, $filmi, $qyteti, $id]);
        echo "<script> alert('Rezervimi eshte perditesuar me sukses!') </script>";
    }
    function deleteRezerviminById($id)
    {
        $conn = $this->connection;

        $sql = "DELETE FROM rezervimet WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        echo "<script> alert('Rezervimi eshte fshire me sukses!') </script>";
    }




}
?>