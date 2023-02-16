<?php
require_once('crudModeli.php');
if (isset($_POST['save'])) {
    $regj = new crudModeli();
    $regj->setEmri($_POST['emri']);
    $regj->setMbiemri($_POST['mbiemri']);
    $regj->setEmail($_POST['email']);
    $regj->setPassword($_POST['password']);
    $regj->inserto();
    }
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/formulari.css" />
    <title>Formulari i Regjistrimit</title>
</head>

<body>
    <div id="formulari">
        <h3>Shto te dhenat ne formularin e regjistrimit</h3>
        <form action='' method="POST">
            <label>Emri</label>
            <input type="text" class="inp" name="emri" placeholder="Shto emrin..." />
            <label>Mbiemri</label>
            <input type="text" class="inp" name="mbiemri" placeholder="Shto mbiemrin..." />
            <label>Email</label>
            <input type="text" class="inp" name="email" placeholder="Shto email..." />
            <label>Password</label>
            <input type="text" class="inp" name="password" placeholder="Shto password" />
            <button name='save'>Ruaj</button>
        </form>
    </div>
</body>

</html>