<?php
include_once '../repository/userRep.php';
include_once '../models/RegisterPerdoruesi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['regjistrohu'])) {
        $emri = $_POST['emri'];
        $mbiemri = $_POST['mbiemri'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $registerPerdoruesi = new RegisterPerdoruesi($emri, $mbiemri, $email, $password);
        $userRep = new userRep();

        $userRep->insertUser($registerPerdoruesi);

        header("Location:dashboard.php");
        exit();
        }
    }
?>

<form method="POST">
    <label><b>Emri</b></label>
    <input id="emri" name="emri" type="text" placeholder="Shkruani emrin" class="form-control" required>

    <label><b>Mbiemri</b></label>
    <input id="mbiemri" name="mbiemri" type="text" placeholder="Shkruani mbiemrin" class="form-control" required>

    <label><b>Email</b></label>
    <input id="emailS" name="email" type="email" placeholder="Shkruani email" class="form-control" required>

    <label><b>Password</b></label>
    <input id="passwordS" name="password" type="password" placeholder="Shkruani passwordin" class="form-control"
        required>

    <label><b>Konfirmo Password</b></label>
    <input id="passwordK" type="password" placeholder="Konfirmoni passwordin" class="form-control" required>
    <br>
    <input type="submit" id="button" onclick="validoInputSignup()" name="regjistrohu"
        class="btn btn-primary deep-purple btn-block " value="Shto">
</form>

<script src="../javascript/javascript.js"></script>