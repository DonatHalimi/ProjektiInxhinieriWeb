<?php

class perdoruesi
    {
    private $id;
    public $emri;
    public $mbiemri;
    public $email;
    public $password;
    public $roli;

    public function __construct($id, $emri, $mbiemri, $email, $password,$roli)
        {
        $this->id = $id;
        $this->emri = $emri;
        $this->mbiemri = $mbiemri;
        $this->email = $email;
        $this->password = $password;
        $this->roli = $roli;
        }

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


    public function getMbiemri()
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

    public function getRoli()
        {
        return $this->roli;
        }

    public function setRoli($password)
        {
        $this->password = $password;
        }
    }
?>