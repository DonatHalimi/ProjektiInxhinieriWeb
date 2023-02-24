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
</head>

<body>
<h1>User Dashboard</h1>
    <h2>Filmat e rezervuar</h2>
    <table  class="table">
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
            <td><a href='editRez.php?id=$rezervimet[id]'><i class='fa-solid fa-pen-to-square'></i></a></td>
            <td><a href='deleteRez.php?id=$rezervimet[id]'><i class='fa-sharp fa-solid fa-trash'></i></a></td>
            <td><a href='addRez.php?id=$rezervimet[id]'>i class='fa-sharp fa-solid fa-calendar-days'></i></a></td>
            </tr>
            ";
            }
        ?>
    </table>
</body>

</html>