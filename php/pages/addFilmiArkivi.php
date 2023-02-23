<?php
include_once '../repository/filmaArkiviRep.php';
include_once '../models/FilmatArkivi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['save'])) {
        $emri = $_POST['emri'];
        $cover = $_POST['cover'];

        $filmat = new FilmatArkivi($emri, $cover);
        $filmaArkiviRep = new filmaArkiviRep();

        $filmaArkiviRep->insertoFilminArkivi($filmat);
        header("Location:dashboard.php");
        exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/addFilmiArkiviStyle.php">
</head>

<body>
    <div class="addF">
        <form action="" method="POST">
            <label><b>Emri</b></label>
            <input id="emri" name="emri" type="text" placeholder="Shkruani emrin e filmit" class="form-control"
                required>
            <label><b>Inserto Cover</b></label>
            <input id="cover" name="cover" type="file" class="form-control" required>
            <input type="submit" id="button" name="save" class="btn btn-primary deep-purple btn-block" value="Ruaj">
        </form>
    </div>

</body>

</html>