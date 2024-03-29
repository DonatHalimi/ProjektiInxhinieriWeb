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



    <?php include 'slider.php'; ?>
    <div class="slider-container">
        <button id="prevBtn"></button>
         <img src="<?php echo $varguIFotove[0]; ?>" id="foto">
        <button id="nextBtn"></button>
    </div>
    </div>

    <section class="reservation" id="reservation">
        <form action="" method="POST">
            <h3>Rezervoni</h3>
            <div class="flex">
                <div class="box">
                    <p>Data kur doni ta shikoni</p>
                    <input type="date" name="data" class="input" id="dataZ" required>
                </div>
                <div class="box">
                    <p>Ne cfare orari doni ta shikoni?</p>
                    <select type="time" name="orari" class="input" id="orari" required>
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
                    <select type="text" name="persona" class="input" id="persona" required>
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
                    <select type="text" name="filmi" class="input" id="filmZ" required>
                        <option disabled selected value>Zgjedhni nje film</option>
                        <option value="Batman (2022)">Batman (2022)</option>
                        <option value="Black Adam (2022)">Black Adam (2022)</option>
                        <option value="Nope (2022)">Nope (2022)</option>
                        <option value="Wakanda Forever (2022)">Wakanda Forever (2022)</option>
                        <option value="Thor: Love and Thunder (2022)">Thor: Love and Thunder (2022)
                        </option>
                    </select>
                </div>
                <div class="box">
                    <p>Ne cilin qytet?</p>
                    <select type="text" name="qyteti" class="input" id="qytet" required>
                        <option disabled selected value>Zgjedhni nje qytet</option>
                        <option value="Mitrovice">Mitrovice</option>
                        <option value="Prishtine">Prishtine</option>
                        <option value="Ferizaj">Ferizaj</option>
                        <option value="Prizren">Prizren</option>
                    </select>
                </div>
            </div>
            <input type="submit" class="buton" value="Rezervo" onclick="validoInputRezervo()" name="rezervo">
        </form>
        <?php include_once '../controller/rezCont.php'; ?>
    </section>

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