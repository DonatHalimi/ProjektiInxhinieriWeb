<?php
include_once '../repository/filmaRep.php';

$filmiId = $_GET['id'];

$filmaRep = new filmaRep();

$filmi = $filmaRep->getFilmatMainById($filmiId);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/editStyle.php">
</head>
<body>
    <div class="addA">
        <form action="" method="POST">
            <label>Id</label>
            <input type="text" name="id" value="<?= $filmi['id'] ?>" readonly> <br><br>
            <label>Emri</label>
            <input type="text" name="emri" value="<?= $filmi['emri'] ?>"> <br><br>
            <label>Cover</label>
            <input type="text" name="cover" value="<?= $filmi['cover'] ?>"> <br><br>
            <label>Detajet</label>
            <input type="text" name="detajet" value="<?= $filmi['detajet'] ?>"> <br><br>
        
            <input id="button" type="submit" name="save" value="save"> <br><br>
        </form>
    </form>
    </div>
</body>
</html>

<?php

if (isset($_POST['save'])) {
    $id = $filmiId;
    $emri = $_POST['emri'];
    $cover = $_POST['cover'];
    $detajet = $_POST['detajet'];

    $filmaRep->perditesoFilmin($id, $emri, $cover, $detajet);
    header("Location:dashboard.php");
    }
?>