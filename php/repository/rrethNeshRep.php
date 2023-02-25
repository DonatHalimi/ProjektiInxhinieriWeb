<?php
include_once '../database/dbConnect.php';

class rrethNeshRep
    {
    private $connect;

    function __construct()
        {
        $conn = new dbConnection;
        $this->connect = $conn->startConnection();
        }


    function insertoRrethNeshTeksti($rrethNeshTeksti)
        {
        $conn = $this->connect;

        $teksti = $rrethNeshTeksti->getRrethNeshTeksti();
       

        $sql = "INSERT INTO rrethnesh (teksti) VALUES (?)";

        $statement = $conn->prepare($sql);
        $statement->execute([$teksti]);
        echo "<script> alert('Teksti eshte insertuar me sukses!') </script>";
        }
    function getAllTekstiRrethNesh()
        {
        $conn = $this->connect;

        $sql = "SELECT * FROM rrethnesh";
        $statement = $conn->query($sql);
        $teksti = $statement->fetchAll();

        return $teksti;
        }
    function getTekstiById($id)
        {
        $conn = $this->connect;

        $sql = "SELECT * FROM rrethnesh WHERE id='$id'";
        $statement = $conn->query($sql);
        $teksti = $statement->fetch();

        return $teksti;
        }

    function perditesoTekstinRrethNesh($id,$teksti)
        {
        $conn = $this->connect;

        $sql = "UPDATE rrethnesh SET teksti=? where id=?";

        $statement = $conn->prepare($sql);


        $statement->execute([$teksti,$id]); 
        echo "<script> alert('Teksti eshte perditesuar me sukses!') </script>";
        }
    function deleteTekstiRrethNeshById($id)
        {
        $conn = $this->connect;

        $sql = "DELETE FROM rrethnesh WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        echo "<script> alert('Teksti eshte fshire me sukses!') </script>";
        }
    }
?>