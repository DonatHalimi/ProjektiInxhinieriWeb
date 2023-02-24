<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kinemaja</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,900" rel="stylesheet">

    <script src="https://kit.fontawesome.com/7283136402.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.php">
    <link rel="stylesheet" href="signup.php">
    <link rel="stylesheet" href="../../css/indexStyle.php">
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

    <h2 id="head2">Tani ne kinema</h2>

    <div class="slider-container">
        <button id="prevBtn"></button>
        <img src="" id="foto">
        <button id="nextBtn"></button>
    </div>
    </div>
    <br>
    <br>
    <br>
    
    <h2 style="text-align:center">Duhet te beni log-in para se te mundeni me rezervu!</h2>
    <br>
    <br>
    <br>
    <br>

    <footer id="footer">
        <div class="contact-section">
            <h3 id="kontakt">Contact</h3>

            <div class="text-center">
                <ul>
                    <h3>Na kontaktoni</h3>
                    <br>
                    <li>044-123-321</li>
                    <li>049-456-654</li>
                    <li>045-789-987</li>
                </ul>

                <ul>
                    <h3>Email</h3>
                    <br>
                    <li>malmikullovci@gmail.com</li>
                    <li>donat.halimi03@gmail.com</li>
                </ul>

                <div id="btn">
                    <h3>Na ndiqni ne rrjetet sociale</h3>
                    <br>
                    <button type="button" class="btn btn-primary btn-circle btn-sm"><a
                            href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></button>
                    <button type="button" class="btn btn-danger btn-circle btn-sm"><a
                            href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></button>
                    <button type="button" class="btn btn-info btn-circle btn-sm"><a href="https://www.twitter.com/"><i
                                class="fa fa-twitter"></i></a></button>
                </div>

                <ul>
                    <h3>Adresa</h3>
                    <br>
                    <li>Rruga Mbretresha Teute, Mitrovice</li>
                    <li>Rruga Afrim Loxha, Prishtine</li>
                    <li>Rruga Deshmoret E Kombit, Ferizaj</li>
                    <li>Rruga Tirana, Prizren</li>
                </ul>
            </div>
        </div>
    </footer>

    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <script src="../../javascript/javascript.js"></script>
</body>

</html>