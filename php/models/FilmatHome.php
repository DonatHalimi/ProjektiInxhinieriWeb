<?php

class FilmatHome
    {
    private $Emri;
    private $Cover;
    private $Detajet;
    private $Source;

    function __construct($Emri, $Cover, $Detajet, $Source)
        {

        $this->Emri = $Emri;
        $this->Cover = $Cover;
        $this->Detajet = $Detajet;
        $this->Source = $Source;
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
    function getFilmatHomeSource()
        {
        return $this->Source;
        }
    }
?>