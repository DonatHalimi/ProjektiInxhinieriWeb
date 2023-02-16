<?php
require "Njeriu.php";

class Useri extends Njeriu
    {
    public function __construct($emri = '', $mbiemri = '', $email = '', $password = '')
        {
        parent::__construct($emri, $mbiemri, $email, $password);
        }
    }

?>