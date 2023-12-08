<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/bulma.min.css" />
    </head>
    <body>
        <!-- --------------------- -->
        <?php
        include_once("header.php");
        ?>
        
        <!-- ------------------- -->
        <section class="hero is-success is-fullheight">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="column is-4 is-offset-4">
                        <?php
                        if (isset($_SESSION['nao_autenticado'])) :
                        ?>
                            <div class="notification is-danger">
                                <p>ERRO: Usuário ou senha inválidos.</p>
                            </div>
                        <?php
                        endif;
                        unset($_SESSION['nao_autenticado']);
                        ?>
                        <div class="box">
                            <form action="login.php" method="POST">

                            <div class="login">
                                    <p style="color: #FFBC49; margin: 5px; font-size: 35px">LOGIN</p>
                                </div>
                                <br>
                            
                                <div class="field">
                                    <div class="control">
                                        <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="" style="background-color: #F4F0D8; border-radius: 40px">
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <input name="senha" class="input is-large" type="password" placeholder="Sua senha" style="background-color: #F4F0D8; border-radius: 40px">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                                <br>
                                <div class="field">
                                    <a href="cadastro.php">Não tem uma conta?  Cadastre-se</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <style>
        body {
            background-color: #F4F0D8;
            border-radius: 40px;
        }

        .hero.is-success {
            background: #F4F0D8;
            color: #544013;
        }

        .title.has-text-grey a {
            color: #F4F0D8;
            border-radius: 40px;
        }

        .notification.is-danger {
            background-color: #F4F0D8;
            color: black;
            border-radius: 40px;
        }

        .box {
            background-color: #544013;
            color: #F4F0D8;
            border-radius: 40px;
        }

        .button.is-link {
            background-color: #FFBC49;
            color: #544013;
            border-radius: 40px;
        }

        .button.is-link:hover {
            background-color: #F4F0D8;
            color: #544013;
            border-radius: 40px;
        }

         /* ------------------- */

        html {
            scroll-behavior: smooth; /* Permite transição suave quando se clica Nav a*/
        }   
        .navbar {
            background-color: #544013;
        }
        .navbar img {
            float: left;
            margin-top: 5px;
            margin-left: 5%;
            height: 40px; /* ajuste conforme necessário */
        }
        .navbar .logo {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50px; /* ajuste conforme necessário */
            color: white;
            text-decoration: none;
            font-size: 1.5em;
            margin-right: 12%;
            }
        .navbar .logo img {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 20px; /* ajuste conforme necessário */
        }
        .navbar .logo img {
            display: flex;
            justify-content:right;
            align-items:baseline;
            height: 20px; /* ajuste conforme necessário */
        }
        .navbar .login {
            float: right;
            display: flex; /* Adicionado para alinhar os itens na mesma linha */
            align-items: center; /* Alinha verticalmente com a logo */
            margin-right: 5%;
        }
        .login img {
            height: 30px; /* Ajuste conforme necessário */
            margin-left: 10px; /* Ajuste conforme necessário */
            margin-top: -50px;
        }
        .subnav{
            background-color: #544013;
            position: fixed;
            top: 0px;
            height: auto;
            width: 100%;
            z-index: 999;
        }
        .subnav2 {
            position: fixed;
            display: flex;
            background-color: #EBD09D;
            top: 50px;
            justify-content: center;
            height: 65px;
            width: 100%;
            gap: 13%; 
            padding: 8px 14px;
        }
        .button2 {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #EBD09D;
            outline-offset: -3px;
            border: none;
            cursor: pointer;
            transition: 400ms;
            border-radius: 45px;
            
        }
        .button2 svg path {
            transition: 400ms;
        }
        .button2:hover {
            background-color: #FFBC49;
        }
        .button2:hover svg path {
            fill: #007ACC;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    </body>
</html>
































