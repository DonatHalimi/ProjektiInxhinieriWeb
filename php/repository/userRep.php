<?php
include '../database/dbConnect.php';

class userRep
    {
    private $connection;

    function __construct()
        {
        $conn = new dbConnect;
        $this->connection = $conn->startConnection();
        }


    //Krijimi i metodes per insertim te dhenave
    function insertUser($perdoruesi)
        {
        $conn = $this->connection;

        $id = $perdoruesi->getId();
        $emri = $perdoruesi->getEmri();
        $mbiemri = $perdoruesi->getMbiemri();
        $email = $perdoruesi->getEmail();
        $password = $perdoruesi->getPassword();

        $sql = "INSERT INTO perdoruesit (id,emri,mbiemri,email,password) VALUES (?,?,?,?,?)";

        $statement = $conn->prepare($sql);
        $statement->execute([$id, $emri, $mbiemri, $email, $password]);
        echo "<script> alert('User eshte insertuar me sukses!') </script>";
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
    function perditesoUser($id, $emri, $mbiemri, $email, $password)
        {
        $conn = $this->connection;

        $sql = "UPDATE perdoruesit SET emri=?,mbiemri=?,email=?,password=? where id=?";

        $statement = $conn->prepare($sql);

        echo "emri: " . $emri . "<br>";
        echo "mbiemri: " . $mbiemri . "<br>";
        $statement->execute([$emri, $mbiemri, $email, $password, $id]);
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
    function kontrolloUser($emri,$password,$authorizedAdminEmails)
        {
            if ($emri && password_verify($password, $emri['password'])) {
    
                if (in_array($emri['email'], $authorizedAdminEmails)) {
                    $_SESSION['roli'] = 'admin';
    
                    header('Location: dashboard.php');
                    exit();
                } else {
                    $_SESSION['roli'] = 'user';
    
                    header('Location: user.php');
                    exit();
                }
            }
        }
    }
?>