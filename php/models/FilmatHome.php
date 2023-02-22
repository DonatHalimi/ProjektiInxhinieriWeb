<?php

class FilmatHome
    {
    private $Emri;
    private $Cover;
    private $Detajet;

    function __construct($Emri, $Cover, $Detajet)
        {

        $this->Emri = $Emri;
        $this->Cover = $Cover;
        $this->Detajet = $Detajet;
        }

    function getFilmatHomeEmri()
        {
        return $this->Emri;
        }
    function getFilmatHomeCover()
        {
        return $this->Cover;
        }
    function getFilmatHomeDetajet()
        {
        return $this->Detajet;
        }
    }
?>