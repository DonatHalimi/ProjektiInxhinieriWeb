<?php

class RegisterRezervimin
    {
    private $Data;
    private $Orari;
    private $Persona;
    private $Filmi;
    private $Qyteti;

    function __construct($Data, $Orari, $Persona, $Filmi, $Qyteti)
        {
        $this->Data = $Data;
        $this->Orari = $Orari;
        $this->Persona = $Persona;
        $this->Filmi = $Filmi;
        $this->Qyteti = $Qyteti;
        }

    function getRezervimiData()
        {
        return $this->Data;
        }
    function getRezervimiOrari()
        {
        return $this->Orari;
        }
    function getRezervimiPersona()
        {
        return $this->Persona;
        }
    function getRezervimiFilmi()
        {
        return $this->Filmi;
        }
    function getRezervimiQyteti()
        {
        return $this->Qyteti;
        }
    }
?>