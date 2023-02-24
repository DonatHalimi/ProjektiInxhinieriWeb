<?php
header('Content-type: text/css; charset:UTF-8');
?>
body{
background-color: beige;
font-family: sans-serif;
}

.addF {
width: 350px;
height: 330px;
margin: auto;
background-color: rgb(27, 160, 60);
border-radius: 3px;
margin: 150px auto;
border-radius: 30px;
}

form {
width: 300px;
margin-left: 20px;
padding-top: 10px;
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

input[type=file]::file-selector-button {
margin-right: 20px;
border: none;
background: rgb(27, 160, 60);
padding: 10px 20px;
border-radius: 10px;
color: #fff;
cursor: pointer;
transition: background .2s ease-in-out;
}

input[type=file]::file-selector-button:hover {
background: rgb(52, 196, 148);
}

#button {
height:100%;
width:100%;
margin-top: 25px;
background-color: rgb(52, 196, 148);
border-color: rgb(27, 160, 60);
}