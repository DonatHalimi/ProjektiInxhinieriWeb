<?php
include_once '../database/dbConnect.php';

class filmaArkiviRep
    {
    private $connect;

    function __construct()
        {
        $conn = new dbConnection;
        $this->connect = $conn->startConnection();
        }


    function insertoFilminArkivi($filmatarkivi)
        {
        $conn = $this->connect;

        $emri = $filmatarkivi->getFilmatArkiviEmri();
        $cover = $filmatarkivi->getFilmatArkiviCover();
        $source = $filmatarkivi->getFilmatArkiviSource();

        $sql = "INSERT INTO filmatarkivi (emri,cover,source) VALUES (?,?,?)";

        $statement = $conn->prepare($sql);
        $statement->execute([$emri, $cover, $source]);
        echo "<script> alert('Filmi {$emri} eshte insertuar me sukses!') </script>";
        }
    function getAllFilmatArkivi()
        {
        $conn = $this->connect;

        $sql = "SELECT * FROM filmatarkivi";
        $statement = $conn->query($sql);
        $film = $statement->fetchAll();

        return $film;
        }
    function getFilmatArkiviById($id)
        {
        $conn = $this->connect;

        $sql = "SELECT * FROM filmatarkivi WHERE id='$id'";
        $statement = $conn->query($sql);
        $film = $statement->fetch();

        return $film;
        }

    function perditesoFilminArkivi($id, $emri, $cover, $source)
        {
        $conn = $this->connect;

        $sql = "UPDATE filmatarkivi SET emri=?,cover=?,source=? where id=?";

        $statement = $conn->prepare($sql);


        $statement->execute([$emri, $cover, $source, $id]);
        echo "<script> alert('Filmi eshte perditesuar me sukses!') </script>";
        }
    function deleteFilminArkiviById($id)
        {
        $conn = $this->connect;

        $sql = "DELETE FROM filmatarkivi WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        echo "<script> alert('Filmi eshte fshire me sukses!') </script>";
        }
    }
?>