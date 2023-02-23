<?php
include_once '../database/dbConnect.php';
session_start();
class userRep
    {
    private $connection;

    function __construct()
        {
        $conn = new dbConnection;
        $this->connection = $conn->startConnection();
        }


    //Krijimi i metodes per insertim te dhenave
    function insertUser($perdoruesi)
        {
        $conn = $this->connection;

        $emri = $perdoruesi->getRegisterPerdoruesiEmri();
        $mbiemri = $perdoruesi->getRegisterPerdoruesiMbiemri();
        $email = $perdoruesi->getRegisterPerdoruesiEmail();
        $password = $perdoruesi->getRegisterPerdoruesiPassword();

        $sql = "INSERT INTO perdoruesit (emri,mbiemri,email,password,roli) VALUES (?,?,?,?,?)";

        $statement = $conn->prepare($sql);
        $statement->execute([$emri, $mbiemri, $email, $password, 2]);
        //Insertimi i 2 adminave
        // $statement->execute([1, 'Mal', 'Mikullovci', 'malmikullovci@gmail.com', 'Ubtubt123', 1]);
        // $statement->execute([2, 'Donat', 'Halimi', 'donat.halimi03@gmail.com', 'Ubtubt1234', 1]);

        echo "<script> alert('User {$emri} eshte insertuar me sukses!') </script>";
        }

    function readPerdoruesi($loginPerdoruesi)
        {
        $databaseConnection = $this->connection;
        $email = $loginPerdoruesi->getLoginPerdoruesiEmail();
        $password = $loginPerdoruesi->getLoginPerdoruesiPassword();

        $sql = "SELECT * FROM perdoruesit WHERE email='$email'";

        $statement = $databaseConnection->query($sql);
        $perdoruesi = $statement->fetch();

        if ($perdoruesi) {
            return $perdoruesi;
            } else {
            return false;
            }
        }

    //Metoda per shfaqjen e te dhenave nga DBH
    function getAllUsers()
        {
        $conn = $this->connection;

        $sql = "SELECT * FROM perdoruesit";
        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
        }

    function getUserById($id)
        {
        $conn = $this->connection;

        $sql = "SELECT * FROM perdoruesit WHERE id='$id'";
        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
        }


    //Metoda per update te dhenave 
    function perditesoUser($id, $emri, $mbiemri, $email, $password, $roli)
        {
        $conn = $this->connection;

        $sql = "UPDATE perdoruesit SET emri=?,mbiemri=?,email=?,password=?, roli=? where id=?";

        $statement = $conn->prepare($sql);


        $statement->execute([$emri, $mbiemri, $email, $password, $roli, $id]);
        echo "<script> alert('User eshte perditesuar me sukses!') </script>";
        }

    //Metoda per te fshire te dhena
    function deleteUserById($id)
        {
        $conn = $this->connection;

        $sql = "DELETE FROM perdoruesit WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        echo "<script> alert('User eshte fshire me sukses!') </script>";
        }
    }
?>