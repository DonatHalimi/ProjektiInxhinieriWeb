<?php

class dbConnection
    {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "projekti";


    function startConnection()
        {

        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
            } catch (PDOException $e) {
            echo "Nuk mund te lidhej me databazen " . $e->getMessage();
            return null;
            }
        }
    }

?>