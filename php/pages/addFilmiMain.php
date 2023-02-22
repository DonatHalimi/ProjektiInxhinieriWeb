<?php
include_once '../repository/filmaRep.php';
include_once '../models/FilmatHome.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['save'])) {
        $emri = $_POST['emri'];
        $cover = $_POST['cover'];
        $detajet = $_POST['detajet'];

        header("Location:dashboard.php");

        $filmat = new FilmatHome($emri, $cover, $detajet);
        $filmatHome = new filmaRep();

        $filmatHome->insertoFilmin($filmat);
        }
    }
?>

<form action="" method="POST">
    <label><b>Emri</b></label>
    <input id="emri" name="emri" type="text" placeholder="Shkruani emrin e filmit" class="form-control" required>
    <br>
    <label><b>Inserto Cover</b></label>
    <input id="cover" name="cover" type="file" class="form-control" required>
    <br>
    <label><b>Detajet</b></label>
    <input id="detajet" name="detajet" type="text" placeholder="Shkruani detajet e filmit" class="form-control"
        required>
    <br>
    <input type="submit" id="button" name="save" class="btn btn-primary deep-purple btn-block" value="Shto">
</form>