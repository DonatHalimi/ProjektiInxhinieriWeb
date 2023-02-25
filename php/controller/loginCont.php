<?php
include_once '../repository/userRep.php';
include_once '../models/LoginPerdoruesi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $loginPerdoruesi = new LoginPerdoruesi($email, $password);
        $userRep = new userRep();
        $user = $userRep->readPerdoruesi($loginPerdoruesi);

        if ($user && $user["email"] == $email && $user["password"] == $password) {
            if ($user["roli"] == 1) {
                header("Location: dashboard.php");

                } else if ($user["roli"] == 2) {
                header("Location: rezervimi.php");

                } else {
                echo "<script>alert('Ky email nuk ekziston!');</script>";
                }
            } else {
            echo "<script>alert('Duhet te regjistroheni per te mundur te kyqeni!');</script>";
            header("Location: signup.php");
            }
        }

    }
?>