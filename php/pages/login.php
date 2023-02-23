<!DOCTYPE html>
<html>

<head>
    <title>Log in</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,900" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../../css/loginStyle.php">
    </link>
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

    <div id="login-card" class="card">
        <div class="card-body">
            <h2 class="text center"><b>Log in</b></h2>
            <br>
            <form class="form-group" method="POST">
                <label><b>Email</b></label>
                <input type="email" class="form-control" id="email" placeholder="Shkruani email" name="email" required>

                <label><b>Password</b></label>
                <input type="password" class="form-control" id="password" placeholder="Shkruani fjalekalimin"
                    name="password" required>

                <button type="submit" id="button" name="login" class="btn btn-primary deep-purple btn-block "
                    onclick="validoInput()">Dergo</button>
            </form>
            <?php include_once '../controller/loginCont.php'; ?>

            <p><b>Nuk keni llogari?</b><a href="signup.php"> Regjistrohu</a></p>

        </div>
    </div>

    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <script src="../../javascript/javascript.js"></script>
</body>

</html>