<?php
include_once '../repository/rezRep.php';
include_once '../models/RegisterRezervimin.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['rezervo'])) {
        header("Location:dashboardUser.php");

        $data = $_POST['data'];
        $orari = $_POST['orari'];
        $persona = $_POST['persona'];
        $filmi = $_POST['filmi'];
        $qyteti = $_POST['qyteti'];

        $registerRezervimin = new RegisterRezervimin($data, $orari, $persona, $filmi, $qyteti);
        $rezRep = new rezRep();

        $rezRep->insertRezervimin($registerRezervimin);
    }
}
?>