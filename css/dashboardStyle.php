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
  .to-top {
    background-color: white;
    position: fixed;
    bottom: 50%;
    right: 50%;
    transform: translate(50%, 50%);
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

 