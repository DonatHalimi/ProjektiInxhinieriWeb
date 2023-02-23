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
<html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/addStyle.php">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,900" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">

    <script src="https://kit.fontawesome.com/7283136402.js" crossorigin="anonymous"></script>
    
</head>
<body>
<div class="addA">
    <form method="POST">
        <label><b>Emri</b></label>
        <input class="inputA" name="emri" type="text" placeholder="Shkruani emrin" class="form-control" required>
    
        <label><b>Mbiemri</b></label>
        <input class="inputA" name="mbiemri" type="text" placeholder="Shkruani mbiemrin" class="form-control" required>
    
        <label><b>Email</b></label>
        <input class="inputA" name="email" type="email" placeholder="Shkruani email" class="form-control" required>
    
        <label><b>Password</b></label>
        <input class="inputA" name="password" type="password" placeholder="Shkruani passwordin" class="form-control"
            required>
    
        <label><b>Konfirmo Password</b></label>
        <input class="inputA" type="password" placeholder="Konfirmoni passwordin" class="form-control" required>
        <br>
        <input type="submit" id="button" onclick="validoInputSignup()" name="regjistrohu"
            class="btn btn-primary deep-purple btn-block " value="Shto">
    </form>
</div>

<script src="../javascript/javascript.js"></script>

</body>
</html>
