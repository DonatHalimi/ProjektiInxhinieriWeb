<?php

class RegisterPerdoruesi
    {
    private $Emri;
    private $Mbiemri;
    private $Email;
    private $Password;

    function __construct($Emri, $Mbiemri, $Email, $Password)
        {
        $this->Emri = $Emri;
        $this->Mbiemri = $Mbiemri;
        $this->Email = $Email;
        $this->Password = $Password;
        }


    function getRegisterPerdoruesiEmri()
        {
        return $this->Emri;
        }
    function getRegisterPerdoruesiMbiemri()
        {
        return $this->Mbiemri;
        }
    function getRegisterPerdoruesiEmail()
        {
        return $this->Email;
        }
    function getRegisterPerdoruesiPassword()
        {
        return $this->Password;
        }
    }
?>