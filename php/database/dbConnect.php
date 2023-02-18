<?php

class dbConnect
    {
    private $conn = '';
    private $host = 'localhost';
    private $dbname = 'perdoruesit';
    private $username = 'root';
    private $password = '';

    function startConnection()
        {
        try {
            $this->conn = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password,
                [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
            );
            } catch (PDOException $pdoe) {
            die("Nuk mund të lidhej me bazën e të dhënave {$this->dbname} :" . $pdoe->getMessage());
            }

        return $this->conn;
        }


    }
?>