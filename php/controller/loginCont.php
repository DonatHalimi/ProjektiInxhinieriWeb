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
                } else {
                header("Location: index.php");
                }
            }
        // else
        // {
        //     $alert = "<script>alert('Invalid email and password!');</script>";
        //     echo $alert;
        //     echo "<script>
        //     if ( window.history.replaceState ) {
        //         window.history.replaceState( null, null, window.location.href = 'login.php' );
        //     }
        // </script>";

        // }
        }
    }






?>