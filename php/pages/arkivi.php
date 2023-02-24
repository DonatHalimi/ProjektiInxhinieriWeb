<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">

    <script src="https://kit.fontawesome.com/7283136402.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/arkiviStyle.php">


    <title>Arkivi</title>
</head>

<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <a href="index.php"><img id="logo" src="../../img/cinema-paradiso.jpg" alt=""></a>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li class="menu-list-item active"><a href="index.php" class="linku">Home</a></li>
                    <li class="menu-list-item"><a href="detajet.php" class="linku">Filmat</a></li>
                    <li class="menu-list-item"><a href="arkivi.php" class="linku">Arkivi</a></li>
                    <li class="menu-list-item"><a href="rrethnesh.php" class="linku">Rreth Nesh</a></li>
                    <li class="menu-list-item"><a href="index.php#footer" class="linku">Contact</a></li>
                    <li><a href="login.php" class="linku" id="login-a">Log in</a></li>
                </ul>
            </div>
        </div>
    </div>

    <?php
    require_once('../database/dbConnect.php');

    $db = new dbConnection();
    $conn = $db->startConnection();

    $sql = "SELECT emri, source FROM filmatarkivi";
    $result = $conn->query($sql);

    echo '<div class="movie-list">';
    foreach ($result as $row) {
        echo '<div class="movie-list-item">';
        echo '<figure>';
        echo '<img class="movie-list-item-photo" href="#" src="' . $row['source'] . '" alt="">';
        echo '<figcaption class="covertxt">' . $row['emri'] . '</figcaption>';
        echo '</figure>';
        echo '</div>';
        }
    echo '</div>';
    ?>

    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <script src="../../javascript/javascript.js"></script>
</body>

</html>