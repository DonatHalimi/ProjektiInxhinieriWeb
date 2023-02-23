<?php

class FilmatArkivi
    {
    private $emri;
    private $cover;

    function __construct($emri, $cover)
        {

        $this->emri = $emri;
        $this->cover = $cover;
        }

    function getFilmatArkiviEmri()
        {
        return $this->emri;
        }
    function getFilmatArkiviCover()
        {
        return $this->cover;
        }
    }
?>