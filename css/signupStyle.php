<?php
header('Content-type: text/css; charset:UTF-8');
?>
body {
background-image: url('../img/kinemaja.jpg');
background-size: cover;
background-repeat: no-repeat;
background-position: center;
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
margin-left: -60px;
text-decoration: none;
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
}

.menu-list-item {
margin-right: 50px;
}

.movie-list-description1 {
position: relative;
left: 30px;
display: flex;
position: relative;
left: 30px;
padding-left: 30px;
height: 300px;
float: left;
}

.linku {
text-decoration: none;
color: white;
}

#login-a {
margin-left: 300px;
margin-top: 3px;
padding-left: 610px;
}

.signup-box {
width: 350px;
height: 660px;
margin: auto;
background-color: white;
border-radius: 3px;
margin: 150px auto;
border-radius: 30px;
}

h1 {
text-align: center;
padding-top: 15px;
}

form {
width: 300px;
margin-left: 20px;
}

form label {
display: flex;
margin-top: 20px;
font-size: 18px;
}

form input {
width: 100%;
padding: 7px;
border-color: #ebf0fc;
border-radius: 6px;
outline: none;
background-color: rgb(235, 240, 252);

}

#emri {
background-color: rgb(235, 240, 252);
border-color: #ebf0fc;
color: gray;
}

#mbiemri {
background-color: rgb(235, 240, 252);
border-color: #ebf0fc;
color: gray;
}

#emailS {
background-color: rgb(235, 240, 252);
border-color: #ebf0fc;
color: gray;
}

#passwordS {
background-color: rgb(235, 240, 252);
border-color: #ebf0fc;
color: gray;
}

#passwordK {
background-color: rgb(235, 240, 252);
border-color: #ebf0fc;
color: gray;
}

#button {
margin-top: 10px;
}

#parag1 {
text-align: center;
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