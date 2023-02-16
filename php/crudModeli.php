<?php
require_once('dbConnect.php');

class crudModeli extends dbConnect
    {
    private $id;
    private $emri;
    private $mbiemri;
    private $email;
    private $password;
    private $dbConn;


    public function __construct($id = '', $emri = '', $mbiemri = '', $email = '', $password = '')
        {
        $this->id = $id;
        $this->emri = $emri;
        $this->mbiemri = $mbiemri;
        $this->email = $email;
        $this->password = $password;

        $this->dbConn = $this->connectDB();
        }

    //Metodat get & set
    public function getId()
        {
        return $this->id;
        }
    public function setId($id)
        {
        $this->id = $id;
        }

    public function getEmri()
        {
        return $this->emri;
        }
    public function setEmri($emri)
        {
        $this->emri = $emri;
        }


    public function getMbimeri()
        {
        return $this->mbiemri;
        }
    public function setMbiemri($mbiemri)
        {
        $this->mbiemri = $mbiemri;
        }

    public function getEmail()
        {
        return $this->email;
        }

    public function setEmail($email)
        {
        $this->email = $email;
        }
    public function getPassword()
        {
        return $this->password;
        }

    public function setPassword($password)
        {
        $this->password = $password;
        }

    //Krijimi i metodes per insertim te dhenave
    public function inserto()
        {
        try {
            $sql = "INSERT INTO users_tbl(emri, mbiemri, email, password) value(?,?,?,?)";

            $statement = $this->dbConn->prepare($sql);

            $statement->execute([$this->emri, $this->mbiemri, $this->email, $this->password]);

            } catch (Exception $e) {
            return $e->getMessage();
            }
        }

    //Metoda per update te dhenave 
    public function updateDhenat()
        {
        $sql = 'UPDATE users_tbl SET emri=?, mbiemri=?, email=?, password=? where id=?';
        $stm = $this->dbConn->prepare($sql);
        $stm->execute([$this->emri, $this->mbiemri, $this->email, $this->password, $this->id]);
        }

    //Metoda per te fshire te dhena
    public function deleteDhenat($id)
        {
        $sql = "DELETE FROM users_tbl WHERE id=:id";
        $stm = $this->dbConn->prepare($sql);
        $stm->bindParam(':id', $id);
        $stm->execute();
        if ($stm == true) {
            echo "<script>
            alert('Te dhenat jane fshire me sukses');
            document.location='displayDhenat.php';
            </script>";
            } else {
            return false;
            }
        }

    //Metoda per shfaqjen e te dhenave nga DBH
    public function shfaqGjithaDhenat()
        {
        try {

            $sql = "SELECT * FROM users_tbl";

            $statement = $this->dbConn->prepare($sql);
            $dhenat = $statement->execute();

            return $statement;

            } catch (Exception $e) {
            return $e->getMessage();
            }
        }

    public function lexoDhenatSipasIDs($id)
        {
        $sql = 'SELECT * FROM users_tbl where id=:id';
        $stm = $this->dbConn->prepare($sql);
        $stm->execute([':id' => $this->id = $id]);
        $rezultati = $stm->fetch(PDO::FETCH_ASSOC);
        return $rezultati;
        }
    }
?>