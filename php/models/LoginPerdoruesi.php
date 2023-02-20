<?php

class LoginPerdoruesi{
    private $Email;
    private $Password;

    function __construct($Email,$Password)
    {

        $this->Email = $Email;
        $this->Password = $Password;
    }

    function getLoginPerdoruesiEmail()
    {
        return $this->Email;
    }
    function getLoginPerdoruesiPassword()
    {
        return $this->Password;
    }
}
?>