<?php
include_once '../repository/rrethNeshRep.php';

$tekstiId = $_GET['id'];

$rrethNeshRep = new rrethNeshRep();

$teksti = $rrethNeshRep->getTekstiById($tekstiId);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="../../css/editArkiviStyle.php">
</head>

<body>
    <div class="addA">
        <form action="" method="POST">
            <label>ID</label>
            <input type="text" name="id" value="<?= $teksti['id'] ?>" readonly> <br><br>
            <  <label>Teksti</label>
            <input id="teksti" name="teksti" value="<?= $teksti['teksti'] ?>" type="text"
                placeholder="Shkruani detajet e filmit" class="form-control textarea-style" required>

            <input id="button" type="submit" name="save" value="Ruaj"> <br><br>
        </form>
        </form>
    </div>
</body>

</html>

<?php

if (isset($_POST['save'])) {
    $id = $filmiId;
    $teksti = $_POST['teksti'];
   

    $rrethNeshRep->perditesoTekstinRrethNesh($id, $teksti);
    header("Location:dashboard.php");
    }
?>