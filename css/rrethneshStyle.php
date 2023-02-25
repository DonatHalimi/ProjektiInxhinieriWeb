<?php
header('Content-type: text/css; charset:UTF-8');
?>
body {
    background-image: url('../img/red-cinema.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

@media only screen and (min-width: 1200px) {
    body {
        font-size: 18px;
    }

    .navbar {
        position: sticky;
        width: 100%;
        height: 80px;
        background-color: rgb(26, 25, 25);
    }

    .navbar-container {
        display: flex;
        align-items: center;
        padding: 0 50px;
        height: 100%;
        color: white;
        font-family: "Sen", sans-serif;
    }

    .logo-container {
        flex: 1;
        padding: 0;
        margin: 0;
        margin-left: -70px;
    }

    #logo {
        margin-top: 6px;
        max-width: none;
        float: top;
        margin-right: 20px;
        width: 270px;
        height: 150px;
    }

    .menu-container {
        flex: 6;
        margin-left: -30px;
        margin-bottom: 35px;
    }

    .menu-list {
        display: flex;
        list-style: none;
        margin-top: 60px;
        margin-left: 6px;
        text-decoration: none;
    }

    .menu-list-item {
        margin-right: 50px;
    }

    .linku {
        text-decoration: none;
        color: white;
    }

    #login-a {
        margin-left: 300px;
        margin-top: 3px;
        padding-left: 617px;
    }

    .movie-list-description1 {
        position: relative;
        left: 30px;
        display: flex;
        position: relative;
        left: 30px;
        padding-left: 70px;
        height: 300px;
        float: left;
    }

    .rreth-nesh {
        margin-top: 100px;
        color: white;
    }

    .historiku {
        font-weight: bold;
        text-align: justify;
    }

    .teksti {
        width: 100%;
    }

    .rrethnesh {
        font-family: "Sen", sans-serif;
        text-align: justify;
        padding: 30px;
        margin-left: 30px;
    }
}

html {
    scroll-behavior: smooth;
}

.to-top {
    background-color: white;
    position: fixed;
    bottom: 16px;
    right: 32px;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    color: #1f1f1f;
    text-decoration: none;
    opacity: 0;
    pointer-events: none;
    transition: all .4s;
}

.to-top.active {
    bottom: 32px;
    pointer-events: auto;
    opacity: 1;
}