<?php
include_once '../repository/userRep.php';
include_once '../models/RegisterPerdoruesi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['regjistrohu'])) {
        $emri = $_POST['emri'];
        $mbiemri = $_POST['mbiemri'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        header("location:login.php");

        $registerPerdoruesi = new RegisterPerdoruesi($emri, $mbiemri, $email, $password);
        $userRep = new userRep();

        $userRep->insertUser($registerPerdoruesi);
        }
    }
?>