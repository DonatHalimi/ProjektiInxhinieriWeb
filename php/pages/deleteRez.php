<?php
include_once '../repository/rezRep.php';
$id = $_GET['id'];
$userRepository = new rezRep();

$userRepository->deleteRezerviminById($id);

header("location:dashboard.php");
?>