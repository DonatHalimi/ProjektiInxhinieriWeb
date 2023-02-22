<?php

class rezervimet{
    private $id;
    public $data;
    public $orari;
    public $persona;
    public $filmi;
    public $qyteti;

    public function __construct($id, $data, $orari, $persona, $filmi, $qyteti)
    {
        $this->id = $id;
        $this->data = $data;
        $this->orari = $orari;
        $this->persona = $persona;
        $this->filmi = $filmi;
        $this->qyteti = $qyteti;
    }

    function getId()
    {
        return $this->id;
    }
    function setId($id)
    {
        $this->id = $id;
    }
    function getData()
    {
        return $this->data;
    }
    function setData($data)
    {
        $this->data = $data;
    }
    function getOrari()
    {
        return $this->orari;
    }
    function setOrari($orari)
    {
        $this->orari = $orari;
    }
    function getPersona()
    {
        return $this->persona;
    }
    function setPersona($persona)
    {
        $this->persona = $persona;
    }
    function getFilmi()
    {
        return $this->filmi;
    }
    function setFilmi($filmi)
    {
        $this->filmi = $filmi;
    }
    function getQyteti()
    {
        return $this->qyteti;
    }
    function setQyteti($qyteti)
    {
        $this->qyteti = $qyteti;
    }






































}
?>