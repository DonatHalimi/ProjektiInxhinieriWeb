<?php

include_once '../repository/userRep.php';
$id = $_GET['id'];
$userRepository = new userRep();

$userRepository->deleteUserById($id);

header("Location:dashboard.php");
?>