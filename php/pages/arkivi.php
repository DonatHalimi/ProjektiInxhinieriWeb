<?php
require_once('../database/dbConnect.php');
?>

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

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" href="#" src="../../img/the-godfather.jpg" alt="">
                <figcaption class="covertxt">The Godfather</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/black-panther.jpg" alt="">
                <figcaption class="covertxt">Black Panther</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/happy-death-day.jpg" alt="">
                <figcaption class="covertxt">Happy Death Day</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/logan.jpg" alt="">
                <figcaption class="covertxt">Logan</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/dune.jpg" alt="">
                <figcaption class="covertxt">Dune</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/knives-out.jpg" alt="">
                <figcaption class="covertxt">Knives Out</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/no-time-to-die.jpg" alt="">
                <figcaption class="covertxt">No Time To Die</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/home-alone.jpg" alt="">
                <figcaption class="covertxt">Home Alone</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/pinocchio.jpg" alt="">
                <figcaption class="covertxt">Pinocchio</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/frozen.jpg" alt="">
                <figcaption class="covertxt">Frozen</figcaption>
            </figure>
        </div>
    </div>

    <!-- NEW ROW -->

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/black-swan.jpg" alt="">
                <figcaption class="covertxt">Black Swan</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/lightyear-2022.jpg" alt="">
                <figcaption class="covertxt">Lightyear</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/spiderman-no-way-home-2021.jpg" alt="">
                <figcaption class="covertxt">Spiderman No Way Home</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/the-polar-express.jpg" alt="">
                <figcaption class="covertxt">The Polar Express</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/the-batman.jpg" alt="">
                <figcaption class="covertxt">The Batman</figcaption>
            </figure>
        </div>
    </div>



    <!-- NEW ROW -->

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/1917.jpg" alt="">
                <figcaption class="covertxt">1917</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/creed.jpg" alt="">
                <figcaption class="covertxt">Creed</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/dark-knight.jpg" alt="">
                <figcaption class="covertxt">Dark Knight</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/django-unchained.jpg" alt="">
                <figcaption class="covertxt">Django Unchained</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/hangover-part-2.jpg" alt="">
                <figcaption class="covertxt">Hangover Part 2</figcaption>
            </figure>
        </div>
    </div>



    <!-- NEW ROW -->

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/iron-man-2.jpg" alt="">
                <figcaption class="covertxt">Iron Man 2</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/it.jpg" alt="">
                <figcaption class="covertxt">It</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/justice-league.jpg" alt="">
                <figcaption class="covertxt">Justice League</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/king-kong.jpg" alt="">
                <figcaption class="covertxt">King Kong</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/maleficient.jpg" alt="">
                <figcaption class="covertxt">Maleficient</figcaption>
            </figure>
        </div>
    </div>



    <!-- NEW ROW -->

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/rango.jpg" alt="">
                <figcaption class="covertxt">Rango</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/scream.jpg" alt="">
                <figcaption class="covertxt">Scream</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/soul.jpg" alt="">
                <figcaption class="covertxt">Soul</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/spectre.jpg" alt="">
                <figcaption class="covertxt">Spectre</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/straight-outta-compton.jpg" alt="">
                <figcaption class="covertxt">Straight Outta Compton</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/superman.jpg" alt="">
                <figcaption class="covertxt">Superman</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/tenet.jpg" alt="">
                <figcaption class="covertxt">Tenet</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/bad-teacher.jpg" alt="">
                <figcaption class="covertxt">Bad Teacher</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/cars-2.jpg" alt="">
                <figcaption class="covertxt">Cars 2</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/doctor-strange.jpg" alt="">
                <figcaption class="covertxt">Doctor Strange</figcaption>
            </figure>
        </div>
    </div>



    <!-- NEW ROW -->

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/finding-dory.jpg" alt="">
                <figcaption class="covertxt">Finding Dory</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/first-purge.jpg" alt="">
                <figcaption class="covertxt">First Purge</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/hot-chick.jpg" alt="">
                <figcaption class="covertxt">Hot Chick</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/joker.jpg" alt="">
                <figcaption class="covertxt">Joker</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/logan-1.jpg" alt="">
                <figcaption class="covertxt">Logan</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/alice-in-wonderland.jpg" alt="">
                <figcaption class="covertxt">Alice in Wonderland</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/blow.jpg" alt="">
                <figcaption class="covertxt">Blow</figcaption>
            </figure>
        </div>
    </div>


    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/brave.jpg" alt="">
                <figcaption class="covertxt">Brave</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/bumblebee.jpg" alt="">
                <figcaption class="covertxt">Bumblebee</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/gladiator.jpg" alt="">
                <figcaption class="covertxt">Gladiator</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/hannibal.jpg" alt="">
                <figcaption class="covertxt">Hannibal</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/man-of-steel.jpg" alt="">
                <figcaption class="covertxt">Man of Steel</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/megamind.jpg" alt="">
                <figcaption class="covertxt">Megamind</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/pearl-harbor.jpg" alt="">
                <figcaption class="covertxt">Pearl Harbor</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/saw-2.jpg" alt="">
                <figcaption class="covertxt">Saw 2</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/the-peanuts-movie.jpg" alt="">
                <figcaption class="covertxt">The Peanuts Movie</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/tropic-thunder.jpg" alt="">
                <figcaption class="covertxt">Tropic Thunder</figcaption>
            </figure>
        </div>
    </div>


    <!-- NEW ROW -->

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/ratatouille.jpg" alt="">
                <figcaption class="covertxt">Ratatouille</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/shrek-2.jpg" alt="">
                <figcaption class="covertxt">Shrek 2</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/tomorrow-never-dies.jpg" alt="">
                <figcaption class="covertxt">Tomorrow Never Dies</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/truman-show.jpg" alt="">
                <figcaption class="covertxt">Truman Show</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/wall-e.jpg" alt="">
                <figcaption class="covertxt">Wall-E</figcaption>
            </figure>
        </div>
    </div>



    <!-- NEW ROW -->

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/wolverine.jpg" alt="">
                <figcaption class="covertxt">Wolverine</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/x-men-2.jpg" alt="">
                <figcaption class="covertxt">X-Men 2</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/a-quiet-place.jpg" alt="">
                <figcaption class="covertxt">A Quiet Place</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/baby-driver.jpg" alt="">
                <figcaption class="covertxt">Baby Driver</figcaption>
            </figure>
        </div>
    </div>



    <!-- NEW ROW -->

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/black-widow.jpg" alt="">
                <figcaption class="covertxt">Black Widow</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/cruella.jpg" alt="">
                <figcaption class="covertxt">Cruella</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/dracula.jpg" alt="">
                <figcaption class="covertxt">Dracula</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/free-guy.jpg" alt="">
                <figcaption class="covertxt">Free guy</figcaption>
            </figure>
        </div>
    </div>



    <!-- NEW ROW -->

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/godzilla-vs-kong.jpg" alt="">
                <figcaption class="covertxt">Godzilla Vs Kong</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/hangover-part-3.jpg" alt="">
                <figcaption class="covertxt">Hangover Part 3</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/inception.jpg" alt="">
                <figcaption class="covertxt">Inception</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/pink-panther.jpg" alt="">
                <figcaption class="covertxt">Pink Panther</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/robocop-3.jpg" alt="">
                <figcaption class="covertxt">Robocop 3</figcaption>
            </figure>
        </div>
    </div>



    <!-- NEW ROW -->

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/shaolin-soccer.jpg" alt="">
                <figcaption class="covertxt">Shaolin Soccer</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/six-days-seven-nights.jpg" alt="">
                <figcaption class="covertxt">Six Days Seven Nights</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/skyfall.jpg" alt="">
                <figcaption class="covertxt">Skyfall</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/sonic-the-hedgehog.jpg" alt="">
                <figcaption class="covertxt">Sonic: The Hedgehog</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/taken-2.jpg" alt="">
                <figcaption class="covertxt">Taken 2</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/thor.jpg" alt="">
                <figcaption class="covertxt">Thor</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/transformers.jpg" alt="">
                <figcaption class="covertxt">Transformers</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/wonder-woman.jpg" alt="">
                <figcaption class="covertxt">Wonder Woman</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/fight-club.jpg" alt="">
                <figcaption class="covertxt">Fight Club</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/johnny-english-reborn.jpg" alt="">
                <figcaption class="covertxt">Johny English: Reborn</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/superhero-movie.jpg" alt="">
                <figcaption class="covertxt">Superhero Movie</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/x-files-2.jpg" alt="">
                <figcaption class="covertxt">X-Files 2</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/fast-five.jpg" alt="">
                <figcaption class="covertxt">Fast Five</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/house-sitter.jpg" alt="">
                <figcaption class="covertxt">House Sitter</figcaption>
            </figure>
        </div>
    </div>

    <div class="movie-list">
        <div class="movie-list-item">
            <figure>
                <img class="movie-list-item-photo" src="../../img/moonlight.jpg" alt="">
                <figcaption class="covertxt">Moonlight</figcaption>
            </figure>
        </div>
    </div>

    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <script src="../../javascript/javascript.js"></script>
</body>

</html>