<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Data</th>
            <th>Orari</th>
            <th>Persona</th>
            <th>Filmi</th>
            <th>Qyteti</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Add</th>
        </tr>
        <?php
        include_once '../repository/rezRep.php';
        $rezRep = new rezRep();
        $rezId = $_GET['id'];
        $rez = $rezRep->getRezervimetById($rezId);
        foreach ($rez as $rezervimet) {
            echo
                "
            <tr>
            <td>$rezervimet[id]</td>
            <td>$rezervimet[data]</td>
            <td>$rezervimet[orari]</td>
            <td>$rezervimet[persona]</td>
            <td>$rezervimet[filmi]</td>
            <td>$rezervimet[qyteti]</td>
            <td><a href='editRez.php?id=$rezervimet[id]'>Edit</a></td>
            <td><a href='deleteRez.php?id=$rezervimet[id]'>Delete</a></td>
            <td><a href='addRez.php?id=$rezervimet[id]'>Add</a></td>
            </tr>
            ";
            }
        ?>
    </table>
</body>

</html>