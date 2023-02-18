<?php
include_once '../repository/rezRep.php';

$rezId = $_GET['id'];

$rezRep = new rezRep();

$rez = $rezRep->getRezervimetById($rezId);
?>


<form action="" method="POST">
    <input type="text" name="id" value="<?= $user['id'] ?>" readonly> <br><br>
    <input type="date" name="data" value="<?= $user['data'] ?>"> <br><br>
    <input type="time" name="orari" value="<?= $user['orari'] ?>"> <br><br>
    <input type="text" name="persona" value="<?= $user['persona'] ?>"> <br><br>
    <input type="text" name="filmi" value="<?= $user['filmi'] ?>"> <br><br>
    <input type="text" name="qyteti" value="<?= $user['qyteti'] ?>"> <br><br>

    <input type="submit" name="save" value="save"> <br><br>
</form>

<?php
if (isset($_POST['save'])) {
    $id = $rezId;
    $data = $_POST['data'];
    $orari = $_POST['orari'];
    $persona = $_POST['persona'];
    $filmi = $_POST['filmi'];
    $qyteti = $_POST['qyteti'];

    $rezRep->perditesoRezervimin($id, $data, $orari, $persona, $filmi, $qyteti);
    header("location:dashboard.php");
    }

?>