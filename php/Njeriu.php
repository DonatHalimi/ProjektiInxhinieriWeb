<?php

abstract class Njeriu
    {
    public $emri;
    public $mbiemri;
    public $email;
    public $password;

    public function __construct($emri, $mbiemri, $email, $password)
        {
        $this->emri = $emri;
        $this->mbiemri = $mbiemri;
        $this->email = $email;
        $this->password = $password;
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
    }
?>