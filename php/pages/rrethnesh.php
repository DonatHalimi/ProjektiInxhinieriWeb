<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,900" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">

    <script src="https://kit.fontawesome.com/7283136402.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/rrethneshStyle.php">

    <title>Rreth Nesh</title>
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

    $sql = "SELECT teksti FROM rrethnesh";
    $result = $conn->query($sql);

    echo '<div class="rreth-nesh">';
    echo '<h1>Kinemaja Paradiso</h1>';
    echo '<br>';
    echo '<br>';
    echo '<h4>Historiku dhe informacione</h4>';
    echo '<div class="historiku">';
    foreach ($result as $row) {
        echo '<span class="rrethnesh">';
        echo '<p class="teksti">' . $row['teksti'] . '</p>';
        echo '</span>';
    }
    echo '</div>';
    echo '</div>';
?>

        <a href="#" class="to-top">
            <i class="fas fa-chevron-up"></i>
        </a>

        <script src="../../javascript/javascript.js"></script>
</body>

</html>