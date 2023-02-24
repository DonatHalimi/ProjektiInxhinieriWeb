<?php
header('Content-type: text/css; charset:UTF-8');
?>
* {
    margin: 0;
}

body {
    font-family: 'Roboto', sans-serif;
    background-color: black;
    color: white;
}

/* Ekranet extra te medha (Desktops large) */
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
        margin-left: -50px;
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
        margin-top: 40px;
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

    .movie-list {
  display: flex;
  flex-wrap: wrap;
}

.movie-list-item {
  display: flex;
  flex-direction: row;
  align-items: center;
  margin-bottom: 20px;
}

.movie-list-item-photo {
  height: 400px;
  width: 300px;
  border-radius: 15px;
  margin-right: 20px;
}

.movie-description {
  font-family: "Sen", sans-serif;
  max-width: 60%;
  text-align: justify;
  margin-bottom:11%
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