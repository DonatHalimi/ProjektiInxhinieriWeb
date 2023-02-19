<?php
include_once '../repository/userRep.php';
include_once '../models/perdoruesi.php';

$authorizedAdminEmails = array(
    'malmikullovci@gmail.com',
    'donat.halimi03@gmail.com'
);

function kontrolloUser($perdoruesi, $authorizedAdminEmails)
    {
    if ($perdoruesi && password_verify($_POST['password'], $perdoruesi->getPassword())) {
        if (in_array($perdoruesi->getEmail(), $authorizedAdminEmails)) {
            $_SESSION['roli'] = 'admin';
            header('Location: dashboard.php');
            exit();
            } else {
            $_SESSION['roli'] = 'user';
            header('Location: index.php');
            exit();
            }
        } else {
        echo "Kredencialet e hyrjes nuk jane te sakta!";
        }
    }

if (isset($_POST['loginBtn'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        echo "Ju lutem mbushni te gjitha fushat!";
        } else {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $userRep = new userRep();
        $perdoruesi = $userRep->login($email, $password);

        kontrolloUser($perdoruesi, $authorizedAdminEmails);
        }
    }
?>