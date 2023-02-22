<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>

    <h1>Admin Dashboard</h1>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Emri</th>
            <th>Mbiemri</th>
            <th>Email</th>
            <th>Password</th>
            <th>Roli</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Add</th>
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
               <td>$perdoruesi[roli]</td>           
               <td><a href='edit.php?id=$perdoruesi[id]'>Edit</a></td>
               <td><a href='delete.php?id=$perdoruesi[id]'>Delete</a></td>
               <td><a href='add.php?id=$perdoruesi[id]'>Add</a></td>
               </tr>
           ";
            }
        ?>
    </table>
    <br>
    <br>
    <div class="header">
        <h1>Rezervimi</h1>
    </div>
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
               <td><a href='editRez.php?id=$rezervimet[id]'>Edit</a></td>
               <td><a href='deleteRez.php?id=$rezervimet[id]'>Delete</a></td>
               <td><a href='addRez.php?id=$rezervimet[id]'>Add</a></td>
           </tr>
           ";
            }
        ?>
    </table>
    <br>
    <br>
    <div class="header">
        <h1>Filmat</h1>
    </div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Emri</th>
            <th>Cover</th>
            <th>Detajet</th>
            <th>Edit</th>
            <th>Delete</th>
            <th><a href='addFilmiMain.php?id=$filmatmain[id]'>Add</a></th>
        </tr>
        <?php
        include_once '../repository/filmaRep.php';
        $userRep = new filmaRep();
        $filmat = $userRep->getAllFilmatMain();
        foreach ($filmat as $filmatmain) {
            echo
                "
           <tr>
               <td>$filmatmain[id]</td>
               <td>$filmatmain[emri]</td>
               <td><img src='../../img/$filmatmain[cover]' height = 355px width = 240px > </td>
               <td>$filmatmain[detajet]</td> 
               <td><a href='editFilmiMain.php?id=$filmatmain[id]'>Edit</a></td>
               <td><a href='deleteFilmiMain.php?id=$filmatmain[id]'>Delete</a></td>
               <td><a href='addFilmiMain.php?id=$filmatmain[id]'>Add</a></td>
           </tr>
           ";
            }
        ?>
</body>

</html>