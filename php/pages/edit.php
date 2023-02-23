<?php
include_once '../repository/userRep.php';

$userId = $_GET['id'];

$userRep = new userRep();

$user = $userRep->getUserById($userId);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="../../css/editStyle.php">
</head>

<body>
    <div class="addA">
        <form action="" method="POST">
            <label>ID</label>
            <input type="text" name="id" value="<?= $user['id'] ?>" readonly> <br><br>
            <label>Emri</label>
            <input type="text" name="emri" value="<?= $user['emri'] ?>"> <br><br>
            <label>Mbiemri</label>
            <input type="text" name="mbiemri" value="<?= $user['mbiemri'] ?>"> <br><br>
            <label>Email</label>
            <input type="text" name="email" value="<?= $user['email'] ?>"> <br><br>
            <label>Password</label>
            <input type="text" name="password" value="<?= $user['password'] ?>"> <br><br>
            <label>Roli</label>
            <input type="text" name="roli" value="<?= $user['roli'] ?>"> <br><br>

            <input id="button" type="submit" name="save" value="Ruaj"> <br><br>
        </form>
    </div>
</body>

</html>

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