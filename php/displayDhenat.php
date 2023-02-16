<?php
require_once('crudModeli.php');
$useri = new crudModeli();
$allData = $useri->shfaqGjithaDhenat();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/userstyle.css" />
    <title>Shfaqja e te dhenave</title>
</head>

<body>
    <div id="a1">
        <header>
            <h3>Shtypni buttonin per te regjistruar te dhenat!</h3>
            <a href="insert.php"><Button id='r'>Regjistrohu</Button></a>
        </header>
        <table>
            <hr>
            <p>Lista e te dhenave:</p>
            <tr>
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
            <?php
            foreach ($allData as $key => $vlerat) {
                ?>
                <tr>
                    <td>
                        <?php $vlerat["emri"]; ?>
                    </td>
                    <td>
                        <?php $vlerat["mbiemri"]; ?>
                    </td>
                    <td>
                        <?php $vlerat["email"]; ?>
                    </td>
                    <td>
                        <?php $vlerat["password"]; ?>
                    </td>
                    <td id='de'><button id="d">Delete</button></a>
                        <a href=""><button id='e'>Edit</button>
                    </td></a>
                </tr>
                <?php
                }
            ?>

        </table>
    </div>
</body>

</html>