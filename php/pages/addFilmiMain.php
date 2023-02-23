<?php
include_once '../repository/filmaRep.php';
include_once '../models/FilmatHome.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['save'])) {
        $emri = $_POST['emri'];
        $cover = $_POST['cover'];
        $detajet = $_POST['detajet'];

        $filmat = new FilmatHome($emri, $cover, $detajet);
        $filmaRep = new filmaRep();

        $filmaRep->insertoFilmin($filmat);
        header("Location:dashboard.php");
        exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/addFilmiStyle.php">
    <title>Add</title>
</head>

<body>
    <div class="addF">
        <form action="" method="POST">
            <label><b>Emri</b></label>
            <input id="emri" name="emri" type="text" placeholder="Shkruani emrin e filmit" class="form-control"
                required>
            <label><b>Inserto Cover</b></label>
            <input id="cover" name="cover" type="file" class="form-control" required>
            <br>
            <label><b>Detajet</b></label>
            <input id="detajet" name="detajet" type="text" placeholder="Shkruani detajet e filmit"
                class="form-control textarea-style" required>

            <input type="submit" id="button" class="btn btn-primary deep-purple btn-block" name="save" value="Ruaj">
        </form>
    </div>

</body>

</html>