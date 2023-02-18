<?php
include_once '../repository/userRep.php';
include_once '../models/perdoruesi.php';

if (isset($_POST['registerBtn'])) {
    if (
        empty($_POST['emri']) || empty($_POST['mbiemri']) || empty($_POST['email']) ||
        empty($_POST['password'])
    ) {
        echo "Ju lutem mbushni te gjitha fushat!";
        } else {
        $emri = $_POST['emri'];
        $mbiemri = $_POST['mbiemri'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id = rand(100, 999);

        $perdoruesi = new perdoruesi($id, $emri, $mbiemri, $email, $password);
        $userRep = new userRep();
        $userRep->insertUser($perdoruesi);
        }
    }
?>