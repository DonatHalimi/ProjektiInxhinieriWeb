<?php
header('Content-type: text/css; charset:UTF-8');
?>
* {
margin: 0;
}

body {
background-image: url('../img/red-cinema.jpg');
background-size: cover;
background-repeat: no-repeat;
background-position: center;
color: white;
}

/* Ekranet e vogla (Telefoni) */
@media only screen and (max-width: 576px) {
body {
font-size: 12px;
}

}

/* Ekranet e mesme (Tabletat) */
@media only screen and (min-width: 577px) and (max-width: 768px) {
body {
font-size: 16px;
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
padding-left: 10px;
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

.movie-list {
display: flex;
align-items: center;
float: left;
}

.movie-list-item {
display: flex;
margin-top: 100px;
padding-left: 30px;
height: 300px;
float: left;
object-fit: cover;
}

.movie-list-item-photo {
position: relative;
left: 20px;
border-radius: 15px;
}

.details {
position: absolute;
padding-left: 30px;
margin-top: 460px;
text-decoration: white;
}

#everywhere {
line-height: 1.5em;
height: 3em;
overflow: hidden;
white-space: nowrap;
text-overflow: ellipsis;
width: 100%;
}

#now {
margin-left: 15%;
margin-top: 30px;
font-family: sans-serif;
}

.movie-list-item-photo {
height: 300px;
}

.covertxt {
margin-top: 3px;
text-align: center;
margin-left: 25px;
}

#reservation {
margin-top: 50%;
}

.reservation form {
border: var(red);
padding: 32px;
}

.reservation form .flex {
display: flex;
flex-wrap: wrap;
justify-content: space-between;
}

.reservation form h3 {
background-color: rgb(82, 66, 69);
color: darksalmon;
font-size: 40px;
margin-bottom: 16px;
border-radius: 8px;
padding: 16px;
text-align: center;
}

.reservation form .flex .box {
flex: 1 1 500px;
}

.reservation form .flex .box {
font-size: 24px;
color: white;
}

.reservation form .flex .box .input {
padding: 16px 0;
margin: 16px 0;
border-bottom: red;
background-color: rgb(82, 66, 69);
color: white;
width: 95%;
}

#qytet {
width: 100%
}

#filmZ {
width: 100%;
}

#orari {
width: 100%
}

.buton {
width: 100%;
background-color: rgb(11, 77, 116);
padding: 16px 0;
margin: 16px 0;
color: white;
border-color: rgb(155, 98, 98);
}

#head2 {
display: flex;
padding-left: 50px;
font-size: 50px;
padding-top: 70px;
margin-top: -30px;
margin-bottom: -40px;
}

.contact-section {
display: block;
padding-left: 10px;
background-color: rgb(0, 0, 0);
height: 300px;
font-size: 40px;
}

#kontakt {
align-self: center;
margin-left: 530px;
}

ul {
list-style-type: none;
margin-right: 10px;
}

.text-center {
display: flex;
justify-content: space-between;
margin-right: 90px;
margin-top: 100px;
font-size: 16px;

}

.btn-circle.btn-sm {
width: 40px;
height: 40px;
padding: 2px 0px;
border-radius: 25px;
font-size: 14px;
text-align: center;

margin: 8px;
}
}


/* Ekranet e medha (Llaptop) */
@media only screen and (min-width: 769px) and (max-width: 992px) {
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
padding-left: 10px;
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

.movie-list {
display: flex;
align-items: center;
float: left;
}

.movie-list-item {
display: flex;
margin-top: 100px;
padding-left: 30px;
height: 300px;
float: left;
object-fit: cover;
}

.movie-list-item-photo {
position: relative;
left: 20px;
border-radius: 15px;
}

.details {
position: absolute;
padding-left: 30px;
margin-top: 460px;
text-decoration: white;
}

#everywhere {
line-height: 1.5em;
height: 3em;
overflow: hidden;
white-space: nowrap;
text-overflow: ellipsis;
width: 100%;
}

#now {
margin-left: 15%;
margin-top: 30px;
font-family: sans-serif;
}

.movie-list-item-photo {
height: 300px;
}

.covertxt {
margin-top: 3px;
text-align: center;
margin-left: 25px;
}

#reservation {
margin-top: 50%;
}

.reservation form {
border: var(red);
padding: 32px;
}

.reservation form .flex {
display: flex;
flex-wrap: wrap;
justify-content: space-between;
}

.reservation form h3 {
background-color: rgb(82, 66, 69);
color: darksalmon;
font-size: 40px;
margin-bottom: 16px;
border-radius: 8px;
padding: 16px;
text-align: center;
}

.reservation form .flex .box {
flex: 1 1 500px;
}

.reservation form .flex .box {
font-size: 24px;
color: white;
}

.reservation form .flex .box .input {
padding: 16px 0;
margin: 16px 0;
border-bottom: red;
background-color: rgb(82, 66, 69);
color: white;
width: 95%;
}

#qytet {
width: 100%
}

#filmZ {
width: 100%;
}

#orari {
width: 100%
}

.buton {
width: 100%;
background-color: rgb(11, 77, 116);
padding: 16px 0;
margin: 16px 0;
color: white;
border-color: rgb(155, 98, 98);
}

#head2 {
display: flex;
padding-left: 50px;
font-size: 50px;
padding-top: 70px;
margin-top: -30px;
margin-bottom: -40px;
}

.contact-section {
display: block;
padding-left: 10px;
background-color: rgb(0, 0, 0);
height: 300px;
font-size: 40px;
}

#kontakt {
align-self: center;
margin-left: 530px;
}

ul {
list-style-type: none;
margin-right: 10px;
}

.text-center {
display: flex;
justify-content: space-between;
margin-right: 90px;
margin-top: 100px;
font-size: 16px;

}

.btn-circle.btn-sm {
width: 40px;
height: 40px;
padding: 2px 0px;
border-radius: 25px;
font-size: 14px;
text-align: center;
margin: 8px;
}
}

/* Ekranet extra te medha (Desktops large) */
@media only screen and (min-width: 992px) {
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

.slider-container {
position: relative;
}

#foto {
width: 30%;
height: 800px;
padding-top: 150px;
display: block;
margin: auto;
}

#prevBtn,
#nextBtn {
position: absolute;
top: 50%;
transform: translateY(60%);
width: 50px;
height: 50px;
background-color: #000;
border: none;
border-radius: 50%;
cursor: pointer;
z-index: 1;
}

#prevBtn {
left: 600px;
}

#nextBtn {
right: 600px;
}

#prevBtn:before {
content: "";
display: inline-block;
border: solid white;
border-width: 0 3px 3px 0;
padding: 3px;
transform: rotate(135deg);
}

#nextBtn:before {
content: "";
display: inline-block;
border: solid white;
border-width: 0 3px 3px 0;
padding: 3px;
transform: rotate(-45deg);
}

#prevBtn:hover,
#nextBtn:hover {
background-color: #555;
}

.linku {
text-decoration: none;
color: white;
}

#mesazh {
text-align: center;
margin-top: 120px;
margin-bottom: 500px;
}

#login-a {
margin-left: 300px;
margin-top: 3px;
padding-left: 620px;
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

.movie-list {
display: flex;
align-items: center;
float: left;
}

.movie-list-item {
display: flex;
align-content: center;
align-self: center;
margin-top: 150px;
padding-left: 30px;
max-width: 100%;
height: 300px;
float: left;
object-fit: cover;
}

.movie-list-item-photo {
position: relative;
left: 20px;
border-radius: 15px;
}

.details {
position: absolute;
padding-left: 30px;
margin-top: 460px;
text-decoration: white;
}

#everywhere {
line-height: 1.5em;
height: 3em;
overflow: hidden;
white-space: nowrap;
text-overflow: ellipsis;
width: 100%;
}

#now {
margin-left: 15%;
margin-top: 30px;
font-family: sans-serif;
}

.movie-list-item-photo {
height: 300px;
}

.covertxt {
margin-top: 3px;
text-align: center;
margin-left: 25px;
}

#reservation {
margin-top: 50%;
}

.reservation form {
border: var(red);
padding: 32px;
}

.reservation form .flex {
display: flex;
flex-wrap: wrap;
justify-content: space-between;
}

.reservation form h3 {
background-color: rgb(82, 66, 69);
color: darksalmon;
font-size: 40px;
margin-bottom: 16px;
border-radius: 8px;
padding: 16px;
text-align: center;
}

.reservation form .flex .box {
flex: 1 1 500px;
}

.reservation form .flex .box {
font-size: 24px;
color: white;
}

.reservation form .flex .box .input {
padding: 16px 0;
margin: 16px 0;
border-bottom: red;
background-color: rgb(82, 66, 69);
color: white;
width: 95%;
}

#qytet {
width: 100%
}

#filmZ {
width: 100%;
}

#orari {
width: 100%
}

.buton {
width: 100%;
background-color: rgb(11, 77, 116);
padding: 16px 0;
margin: 16px 0;
color: white;
border-color: rgb(155, 98, 98);
}

#head2 {
display: flex;
padding-left: 50px;
font-size: 50px;
padding-top: 70px;
margin-top: -30px;
margin-bottom: -40px;
}

.contact-section {
display: block;
padding-left: 10px;
background-color: rgb(0, 0, 0);
height: 300px;
font-size: 40px;
}

#kontakt {
text-align: center;
}

ul {
list-style-type: none;
margin-right: 10px;
}

.text-center {
display: flex;
justify-content: space-between;
margin-right: 90px;
margin-top: 100px;
font-size: 16px;

}

.btn-circle.btn-sm {
width: 40px;
height: 40px;
padding: 2px 0px;
border-radius: 25px;
font-size: 14px;
text-align: center;
margin: 8px;
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