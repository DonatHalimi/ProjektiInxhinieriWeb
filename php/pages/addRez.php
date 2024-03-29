<?php
include_once '../repository/rezRep.php';
include_once '../models/RegisterRezervimin.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['rezervo'])) {
        $data = $_POST['data'];
        $orari = $_POST['orari'];
        $persona = $_POST['persona'];
        $filmi = $_POST['filmi'];
        $qyteti = $_POST['qyteti'];

        $registerRezervimin = new RegisterRezervimin($data, $orari, $persona, $filmi, $qyteti);
        $rezRep = new rezRep();

        $rezRep->insertRezervimin($registerRezervimin);

        header("Location:dashboard.php");
        exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="stylesheet" href="../../css/addRezStyle.php">
</head>

<body>
    <div class="flex">
        <form method="POST">
            <div class="box">
                <p>Data kur doni ta shikoni</p>
                <input type="date" name="data" id="dataZ" class="input" required>
            </div>
            <div class="box">
                <p>Ne cfare orari doni ta shikoni?</p>
                <select name="orari" class="input" type="time" id="orari" required>
                    <option disabled selected value>Zgjedhni orarin</option>
                    <option value="16:00:00">16:00</option>
                    <option value="18:30:00">18:30</option>
                    <option value="19:00:00">19:00</option>
                    <option value="20:30:00">20:30</option>
                    <option value="22:00:00">22:00</option>
                </select>
            </div>
            <div class="box">
                <p>Sa persona jeni?</p>
                <select name="persona" class="input" id="persona" required>
                    <option disabled selected value>Zgjedhni numrin e personave</option>
                    <option value="1">1 Person</option>
                    <option value="2">2 Persona</option>
                    <option value="3">3 Persona</option>
                    <option value="4">4 Persona</option>
                    <option value="5+">Me shume se 5 persona</option>
                </select>
            </div>
            <div class="box">
                <p>Cilin film doni ta shikoni?</p>
                <select name="filmi" class="input" id="filmZ" required>
                    <option disabled selected value>Zgjedhni nje film</option>
                    <option value="Batman (2022)">Batman (2022)</option>
                    <option value="Black Adam (2022)">Black Adam (2022)</option>
                    <option value="Nope (2022)">Nope (2022)</option>
                    <option value="Wakanda Forever(2022)">Wakanda Forever (2022)</option>
                    <option value="Thor: Love and Thunder (2022)">Thor: Love and Thunder (2022)
                    </option>
                </select>
            </div>
            <div class="box">
                <p>Ne cilin qytet?</p>
                <select name="qyteti" class="input" id="qytet" required>
                    <option disabled selected value>Zgjedhni nje qytet</option>
                    <option value="Mitrovice">Mitrovice</option>
                    <option value="Prishtine">Prishtine</option>
                    <option value="Ferizaj">Ferizaj</option>
                    <option value="Prizren">Prizren</option>
                </select>
            </div>

            <input type="submit" value="Rezervo" onclick="validoInputRezervo()" name="rezervo" class="buton">
        </form>
    </div>
    <script src="../../javascript/javascript.js"></script>
</body>

</html>