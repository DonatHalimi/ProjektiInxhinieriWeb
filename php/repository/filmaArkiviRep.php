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

        $sql = "INSERT INTO filmatarkivi (emri,cover) VALUES (?,?)";

        $statement = $conn->prepare($sql);
        $statement->execute([$emri, $cover]);
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

    function perditesoFilminArkivi($id, $emri, $cover)
        {
        $conn = $this->connect;

        $sql = "UPDATE filmatarkivi SET emri=?,cover=? where id=?";

        $statement = $conn->prepare($sql);


        $statement->execute([$emri, $cover, $id]);
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