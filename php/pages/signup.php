<!DOCTYPE html>
<html>

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
    <link rel="stylesheet" href="../../css/signupStyle.php">

    <title>Sign up</title>
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


    <div class="signup-box">
        <h1><b>Regjistrimi</b></h1>
        <form class="form-group" method="post">

            <label><b>Emri</b></label>
            <input id="emri" name="emri" type="text" placeholder="Shkruani emrin" class="form-control" required>

            <label><b>Mbiemri</b></label>
            <input id="mbiemri" name="mbiemri" type="text" placeholder="Shkruani mbiemrin" class="form-control"
                required>

            <label><b>Email</b></label>
            <input id="emailS" name="email" type="email" placeholder="Shkruani email" class="form-control" required>

            <label><b>Password</b></label>
            <input id="passwordS" name="password" type="password" placeholder="Shkruani passwordin" class="form-control"
                required>

            <label><b>Konfirmo Password</b></label>
            <input id="passwordK" type="password" placeholder="Konfirmoni passwordin" class="form-control" required>

            <br>
            <input type="submit" id="button" onclick="validoInputSignup()" name="regjistrohu"
                class="btn btn-primary deep-purple btn-block " value="Dergo">
        </form>
        <?php include_once '../controller/registerCont.php'; ?>
        <p id="parag1"><b>Keni llogari?</b><a href="login.php"> Kycuni ketu</a></p>
    </div>

    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <script src="../../javascript/javascript.js"></script>
</body>

</html>