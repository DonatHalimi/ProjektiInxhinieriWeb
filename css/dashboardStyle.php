<?php
header('Content-type: text/css; charset:UTF-8');
?>
body{
    margin:0;
    padding: 20px;
    font-family: sans-serif;
    background-color: beige;
    text-align: center;
}

*{
    box-sizing: border-box;
}

.table{
    width: 100%;
    border-collapse: collapse;
    
}

.table td,.table th{
    padding:12px 15px;
    border: 1px solid #ddd;
    text-align: center;
    font-size: 16px;
}
.table th{
    background-color: rgb(27, 160, 60);
    color:#ffffff
}
.table tbody tr:nth-child(even){
    background-color: #f5f5f5;
}

a {
    text-decoration: none;
    color: inherit;
    
  }
 