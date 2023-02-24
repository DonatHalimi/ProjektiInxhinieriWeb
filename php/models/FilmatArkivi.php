<?php

class FilmatArkivi
    {
    private $emri;
    private $cover;
    private $source;

    function __construct($emri, $cover, $source)
        {

        $this->emri = $emri;
        $this->cover = $cover;
        $this->source = $source;
        }

    function getFilmatArkiviEmri()
        {
        return $this->emri;
        }
    function getFilmatArkiviCover()
        {
        return $this->cover;
        }

    function getFilmatArkiviSource()
        {
        return $this->source;
        }
    }
?>