<?php
include_once '../repository/filmaRep.php';

$filmiId = $_GET['id'];

$filmaRep = new filmaRep();

$filmi = $filmaRep->getFilmatMainById($filmiId);
?>


<form action="" method="POST">
    <input type="text" name="id" value="<?= $filmi['id'] ?>" readonly> <br><br>
    <input type="text" name="emri" value="<?= $filmi['emri'] ?>"> <br><br>
    <input type="text" name="cover" value="<?= $filmi['cover'] ?>"> <br><br>
    <input type="text" name="detajet" value="<?= $filmi['detajet'] ?>"> <br><br>

    <input type="submit" name="save" value="save"> <br><br>
</form>

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