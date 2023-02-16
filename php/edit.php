<?php
require_once('crudModeli.php');
$dhenat = new crudModeli();
$myId = $_GET['id'];
$record = $dhenat->lexoDhenatSipasIDs($myId);

if (isset($_POST['edit'])) {
    if ($myId == $dhenat->getId()) {
        $dhenat->setEmri($_POST['emri']);
        $dhenat->setMbiemri($_POST['mbiemri']);
        $dhenat->setEmail($_POST['email']);
        $dhenat->setPassword($_POST['password']);
        echo $dhenat->updateDhenat();
        echo
            "<script>
            alert('Te dhenat jane perditesuar me sukses!');
            document.location='displayDhenat.php'
            </script>";
        }
    }
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/formulari.css" />
    <title>Formulari i Regjistrimit</title>
</head>

<body>
    <div id="formulari">
        <h3>Perditso te dhenat ne Formular</h3>
        <form action='' method="POST">
            <label>Emri</label>
            <input type="text" class="inp" name="emri" value="<?php echo $record['emri']; ?>" />
            <label>Mbiemri</label>
            <input type="text" class="inp" name="mbiemri" value="<?php echo $record['mbiemri']; ?>" />
            <label>Email</label>
            <input type="text" class="inp" name="email" value="<?php echo $record['email']; ?>" />
            <label>Password</label>
            <input type="text" class="inp" name="password" value="<?php echo $record['password']; ?>" />
            <button name='edit'>Edit</button>
        </form>
    </div>
</body>

</html>