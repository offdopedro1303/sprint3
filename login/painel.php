<?php
session_start();
include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="refresh" content="3; URL='http://127.0.0.1/sprint3/index.php'"/>
</head>
    <body>
        <div class="c-loader"></div>
    </body>
    <style>
        body{
            background-color: #f4f0d8;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .c-loader {
            animation: is-rotating 1s infinite;
            border: 6px solid #544013;
            border-radius: 50%;
            border-top-color: #ffbc49;
            height: 50px;
            width: 50px;
        }
        @keyframes is-rotating {
            to {
                transform: rotate(1turn);
            }
        }
    </style>
</html>
