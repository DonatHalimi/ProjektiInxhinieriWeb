<?php
include_once '../repository/userRep.php';
include_once '../models/RegisterRezervimin.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['rezervo'])) {
        $emri = $_POST['emri'];
        $mbiemri = $_POST['mbiemri'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        header("Location:login.php");

        $registerPerdoruesi = new RegisterPerdoruesi($emri, $mbiemri, $email, $password);
        $userRep = new userRep();

        $userRep->insertUser($registerPerdoruesi);
        }
    }
?>