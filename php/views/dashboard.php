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
            <th>Emri</th>
            <th>Mbiemri</th>
            <th>Email</th>
            <th>Password</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        include_once '../repository/userRep.php';
        $userRep = new userRep();
        $users = $userRep->getAllUsers();
        foreach ($users as $perdoruesi) {
            echo
                "
           <tr>
               <td>$perdoruesi[id]</td>
               <td>$perdoruesi[emri]</td>
               <td>$perdoruesi[mbiemri]</td>
               <td>$perdoruesi[email]</td>
               <td>$perdoruesi[password]</td>
               <td><a href='edit.php?id=$perdoruesi[id]'>Edit</a></td>
               <td><a href='delete.php?id=$perdoruesi[id]'>Delete</a></td>
           </tr>
           ";
            }
        ?>
    </table>
    <br>
    <br>
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
        </tr>
        <?php
        include_once '../repository/rezRep.php';
        $rezRep = new rezRep();
        $rez = $rezRep->getAllRezervimet();
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
               <td><a href='edit.php?id=$rezervimet[id]'>Edit</a></td>
               <td><a href='delete.php?id=$rezervimet[id]'>Delete</a></td>
           </tr>
           ";
            }
        ?>
    </table>
</body>

</html>