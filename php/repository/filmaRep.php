<?php
include_once '../database/dbConnect.php';

class filmaRep
    {
    private $connect;

    function __construct()
        {
        $conn = new dbConnection;
        $this->connect = $conn->startConnection();
        }


    function insertoFilmin($filmatmain)
        {
        $conn = $this->connect;

        $emri = $filmatmain->getFilmatHomeEmri();
        $cover = $filmatmain->getFilmatHomeCover();
        $detajet = $filmatmain->getFilmatHomeDetajet();
        $source = $filmatmain->getFilmatHomeSource();

        $sql = "INSERT INTO filmatmain (emri,cover,detajet,source) VALUES (?,?,?,?)";

        $statement = $conn->prepare($sql);
        $statement->execute([$emri, $cover, $detajet, $source]);
        echo "<script> alert('Filmi eshte insertuar me sukses!') </script>";
        }
    function getAllFilmatMain()
        {
        $conn = $this->connect;

        $sql = "SELECT * FROM filmatmain";
        $statement = $conn->query($sql);
        $film = $statement->fetchAll();

        return $film;
        }
    function getFilmatMainById($id)
        {
        $conn = $this->connect;

        $sql = "SELECT * FROM filmatmain WHERE id='$id'";
        $statement = $conn->query($sql);
        $film = $statement->fetch();

        return $film;
        }

    function perditesoFilmin($id, $emri, $cover, $detajet, $source)
        {
        $conn = $this->connect;

        $sql = "UPDATE filmatmain SET emri=?,cover=?,detajet=?,source=?where id=?";

        $statement = $conn->prepare($sql);


        $statement->execute([$emri, $cover, $detajet, $source, $id]);
        echo "<script> alert('Filmi eshte perditesuar me sukses!') </script>";
        }
    function deleteFilminById($id)
        {
        $conn = $this->connect;

        $sql = "DELETE FROM filmatmain WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        echo "<script> alert('Filmi eshte fshire me sukses!') </script>";
        }

        
    }
?>