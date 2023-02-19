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

    function kontrolloUser($perdoruesi, $authorizedAdminEmails)
    {
    if ($perdoruesi && password_verify($_POST['password'], $perdoruesi->getPassword())) {
        if (in_array($perdoruesi->getEmail(), $authorizedAdminEmails)) {
            $_SESSION['roli'] = 'admin';
            header('Location: dashboard.php');
            exit();
            } else {
            $_SESSION['roli'] = 'user';
            header('Location: index.php');
            exit();
            }
        } else {
        echo "Kredencialet e hyrjes nuk jane te sakta!";
        }

        if (isset($_POST['loginBtn'])) {
            if (empty($_POST['email']) || empty($_POST['password'])) {
                echo "Ju lutem mbushni te gjitha fushat!";
                } else {
                $email = $_POST['email'];
                $password = $_POST['password'];
        
                $userRep = new userRep();
                $perdoruesi = $userRep->login($email, $password);
        
                kontrolloUser($perdoruesi, $authorizedAdminEmails);
                }
            }
    }
    public function login($email, $password)
        {
        $query = "SELECT * FROM perdoruesi WHERE email = ?";

        $stmt = $this->connection->prepare($query);

        $stmt->bindParam(1, $email);

        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $hashed_password = $row['password'];
            if (password_verify($password, $hashed_password)) {
                $perdoruesi = new perdoruesi(
                    $row['id'],
                    $row['emri'],
                    $row['mbiemri'],
                    $row['email'],
                    $row['password'],
                    $row['roli']
                );
                return $perdoruesi;
                }
            }
        return null;
        }
    }
?>
