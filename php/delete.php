<?php
include 'crudModeli.php';
$model = new crudModeli();
$id = $_REQUEST['id'];
$delete = $model->deleteDhenat($id);

if ($delete) {
    echo "<script>alert('Te dhenat jane fshi me sukses!');</script>";
    echo "<script>window.location.href = 'index.php';</script>";
    }
?>