<?php
include_once '../repository/rrethNeshRep.php';
$id = $_GET['id'];
$TekstiRepository = new rrethNeshRep();

$TekstiRepository->deleteTekstiRrethNeshById($id);

header("location:dashboard.php");
?>