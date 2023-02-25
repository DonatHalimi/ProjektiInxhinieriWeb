<?php
include_once '../repository/rrethNeshRep.php';
include_once '../models/rrethNeshM.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['save'])) {
        $teksti = $_POST['teksti'];
       

        $rrethNeshTeksti = new rrethNeshM($teksti);
        $rrethNeshRep = new rrethNeshRep();

        $rrethNeshRep->insertoRrethNeshTeksti($rrethNeshTeksti);
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
    <link rel="stylesheet" href="../../css/addFilmiStyle.php">
    <title>Add</title>
</head>

<body>
    <div class="addF">
        <form action="" method="POST">
            <label><b>Teksti</b></label>
            <input id="teksti" name="teksti" type="text" placeholder="Shkruani tekstin e rreth nesh"
                class="form-control textarea-style" required>

            <input type="submit" id="button" class="btn btn-primary deep-purple btn-block" name="save" value="Ruaj">
        </form>
    </div>

</body>

</html>