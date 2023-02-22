<?php
include_once '../repository/userRep.php';

$userId = $_GET['id'];

$userRep = new userRep();

$user = $userRep->getUserById($userId);
?>


<form action="" method="POST">
    <input type="text" name="id" value="<?= $user['id'] ?>" readonly> <br><br>
    <input type="text" name="emri" value="<?= $user['emri'] ?>"> <br><br>
    <input type="text" name="mbiemri" value="<?= $user['mbiemri'] ?>"> <br><br>
    <input type="text" name="email" value="<?= $user['email'] ?>"> <br><br>
    <input type="text" name="password" value="<?= $user['password'] ?>"> <br><br>
    <input type="text" name="roli" value="<?= $user['roli'] ?>"> <br><br>

    <input type="submit" name="save" value="save"> <br><br>
</form>

<?php
if (isset($_POST['save'])) {
    $id = $userId;
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $roli = $_POST['roli'];

    $userRep->perditesoUser($id, $emri, $mbiemri, $email, $password, $roli);
    header("location:dashboard.php");
    }

?>