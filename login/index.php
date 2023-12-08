<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login - PHP + MySQL - Canal TI</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
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
    </style>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
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
</body>

</html>
































