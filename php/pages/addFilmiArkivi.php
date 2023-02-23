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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/addFilmiStyle.php">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">

    <script src="https://kit.fontawesome.com/7283136402.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="addfilmi.css">
</head>

<body>
    <div class="addF">
        <form action="" method="POST">
            <label><b>Emri</b></label>
            <input id="emri" name="emri" type="text" placeholder="Shkruani emrin e filmit" class="form-control"
                required>
            <label><b>Inserto Cover</b></label>
            <input id="cover" name="cover" type="file" class="form-control" required>
            <input type="submit" id="button" name="save" class="btn btn-primary deep-purple btn-block" value="save">
        </form>
    </div>

</body>

</html>