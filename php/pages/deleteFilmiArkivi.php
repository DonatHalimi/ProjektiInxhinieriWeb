<?php
include_once '../repository/filmaArkiviRep.php';
$id = $_GET['id'];
$filmaArkiviRep = new filmaArkiviRep();

$filmaArkiviRep->deleteFilminArkiviById($id);

header("Location:dashboard.php");
?>