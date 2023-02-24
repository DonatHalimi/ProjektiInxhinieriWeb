<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../css/dashboardStyle.php">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,900" rel="stylesheet">

    <script src="https://kit.fontawesome.com/7283136402.js" crossorigin="anonymous"></script>
    <title>Dashboard</title>
</head>

<body>

    <h1>Admin Dashboard</h1>
    <br>
    <br>
    <h2>Perdoruesit</h2>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Emri</th>
            <th>Mbiemri</th>
            <th>Email</th>
            <th>Password</th>
            <th>Roli</th>
            <th>Edit</th>
            <th>Delete</th>
            <th><a href='add.php?id=$perdoruesi[id]'>Add</a></th>
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
               <td><a href='edit.php?id=$perdoruesi[id]'><i class='fa-solid fa-user-pen'></i></a></td>
               <td><a href='delete.php?id=$perdoruesi[id]'><i class='fa-sharp fa-solid fa-trash'></a></td>
               <td><a href='add.php?id=$perdoruesi[id]'><i class='fa-solid fa-user-plus'></a></td>
               </tr>
           ";
            }
        ?>
    </table>
    <br>
    <br>
    <div class="header">
        <h2>Rezervimi</h2>
    </div>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Data</th>
            <th>Orari</th>
            <th>Persona</th>
            <th>Filmi</th>
            <th>Qyteti</th>
            <th>Edit</th>
            <th>Delete</th>
            <th><a href='addRez.php?id=$rezervimet[id]'>Add</a> </th>
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
               <td><a href='editRez.php?id=$rezervimet[id]'><i class='fa-solid fa-pen-to-square'></a></td>
               <td><a href='deleteRez.php?id=$rezervimet[id]'><i class='fa-sharp fa-solid fa-trash'></a></td>
               <td><a href='addRez.php?id=$rezervimet[id]'><i class='fa-sharp fa-solid fa-calendar-days'></a></td>
           </tr>
           ";
            }
        ?>
    </table>
    <br>
    <br>
    <div class="header">
        <h2>Filmat</h2>
    </div>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Emri</th>
            <th>Cover</th>
            <th>Detajet</th>
            <th>Source</th>
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
               <td><a href='editFilmiMain.php?id=$filmatmain[id]'><i class='fa-solid fa-pen-to-square'></a></td>
               <td><a href='deleteFilmiMain.php?id=$filmatmain[id]'><i class='fa-sharp fa-solid fa-trash'></a></td>
               <td><a href='addFilmiMain.php?id=$filmatmain[id]'><i class='fa-solid fa-plus'></i></a></td>
           </tr>
           ";
            }
        ?>
        <br>
        <br>
    </table>
    <div class="header">
        <h2>Arkivi</h2>
    </div>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Emri</th>
            <th>Cover</th>
            <th>Source</th>
            <th>Edit</th>
            <th>Delete</th>
            <th><a href='addFilmiArkivi.php?id=$filmatarkivi[id]'>Add</a></th>
        </tr>
        <?php
        include_once '../repository/filmaArkiviRep.php';
        $userRep = new filmaArkiviRep();
        $filmat = $userRep->getAllFilmatArkivi();
        foreach ($filmat as $filmatarkivi) {
            echo
                "
           <tr>
               <td>$filmatarkivi[id]</td>
               <td>$filmatarkivi[emri]</td>
               <td><img src='../../img/$filmatarkivi[cover]' height = 355px width = 240px > </td>
               <td>$filmatarkivi[source]</td>
               <td><a href='editFilmiArkivi.php?id=$filmatarkivi[id]'><i class='fa-solid fa-pen-to-square'></a></td>
               <td><a href='deleteFilmiArkivi.php?id=$filmatarkivi[id]'><i class='fa-sharp fa-solid fa-trash'></a></td>
               <td><a href='addFilmiArkivi.php?id=$filmatarkivi[id]'><i class='fa-solid fa-plus'></i></a></td>
           </tr>
           ";
            }
        ?>
        <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>

</body>

</html>