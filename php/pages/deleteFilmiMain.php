<?php
include_once '../repository/filmaRep.php';
$id = $_GET['id'];
$filmaRep = new filmaRep();

$filmaRep->deleteFilminById($id);

header("Location:dashboard.php");
?>