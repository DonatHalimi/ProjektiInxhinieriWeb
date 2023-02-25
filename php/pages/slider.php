<?php
    require_once('../database/dbConnect.php');

    $db = new dbConnection();
    $conn = $db->startConnection();

    $sql = "SELECT  source FROM filmatmain";
    $result = $conn->query($sql);

    $varguIFotove = array();
    foreach ($result as $row) {
        array_push($varguIFotove, $row['source']);
    }
?>


<script>
    var varguIFotove = [
    <?php
        foreach ($varguIFotove as $imagePath) {
            echo "'" . $imagePath . "', ";
        }
    ?>];
    var index = 0;
    const koha = 5000;

    function krijoSlider() {
        document.getElementById('foto').src = varguIFotove[index];
        index++;
        if (index == varguIFotove.length) {
            index = 0;
        }
        setTimeout(krijoSlider, koha);
    }

    krijoSlider();
</script>