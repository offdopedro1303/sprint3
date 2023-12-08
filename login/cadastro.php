<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro - PHP + MySQL - Canal TI</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <?php
        include_once("header.php");
    ?>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <div class="notification is-success" style="background-color: #F4F0D8; color:#544013";>
                    
                    <div class="box">

                    <div class="login">
                                <p style="color: #FFBC49; margin: 5px; font-size: 35px">CADASTRO</p>
                            </div>

                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                                <br>
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome Completo" autofocus style="background-color: #F4F0D8; border-radius: 40px; color:#544013">
                                </div>
                            </div>
                            <br>
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" type="text" class="input is-large" placeholder="Usuário" style="background-color: #F4F0D8; border-radius: 40px; color:#544013;"> 
                                </div>
                            </div>
                            <br>
                            <div class="field">
                                <div class="control">
                                    <input name="email" type="text" class="input is-large" placeholder="Email" autofocus style="background-color: #F4F0D8; border-radius: 40px; color:#544013;">
                                </div>
                            </div>
                            <br>
                            <div class="field">
                                <div class="control">
                                    <input name="CPF" type="text" class="input is-large" placeholder="CPF" autofocus style="background-color: #F4F0D8; border-radius: 40px; color:#544013;">
                                </div>
                            </div>
                            <br>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha" style="background-color: #F4F0D8; border-radius: 40px; color:#544013;">
                                </div>
                            </div>
                            <br>
                            <div class="field">
                                <a href="../politicadeprivacidade.php">Política de Privacidade</a>
                                <br>
                                <a href="../termosdeuso.php">Concordo com todos os Termos de Uso.</a> <input type="checkbox">
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<style>
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
</html>