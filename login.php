<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="img/logoprin.png">
        
        
    </head>
    <body>
    <?php
        include_once("templates/header.php");
        ?>

          <style>
            .card-log {
    padding: 15px;
}
    .card-login {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 110px;
}
    .meet {
    margin: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 40px;
    width: 380px;
    height: 370px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #544013; /* Fundo branco */
    text-align: center; /* Centraliza o conteúdo */
}
.input {
            background: none;
            border: 0;
            outline: 0;
            height: 40px;
            width: 100%;
            border-bottom: 1px solid #eee;
            font-size: .9rem;
            padding: 8px 15px;
            
}
.form button {
            background-color: #EBCA46;
            color: #fff;
            border: 0;
            border-radius: 24px;
            padding: 10px 16px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;


        }
        .login2 {
            color: #FFBC49;
            font-size: 20px;
        }
        .log-container{

            background-color: wheat;
            border: none;
            position: relative;
            overflow: hidden;
            border-radius: 1.5rem;
        }
        .buttonlogin    {
            position: relative;
    z-index: 1;
    background-color: #FFBC49;  
    border: none;
            overflow: hidden;
            border-radius: 1.5rem;
            font-size: 24px;
            height: 3rem;
    padding: 0 4rem;
    border-radius: 1.5rem;
        }
.buttonlogin{
    color: #544013;
            font-size: 20px;
}
.conta {
   
    color: wheat;
}
.cadastre-se{
    color: wheat;
}
        

            </style>
          <div class="card-login">
            <div class="meet">
                <div class="card-log">
                <div class="login2">
                    <p>LOGIN</p>
                </div>
                    <div class="log-container">
                    <input type="email" class="input" placeholder="Email">
                    </div>
                    <br>
                    <div class="log-container">
                    <input type="password" class="input" placeholder="Senha">
                    </div>
                    <br>
                    
</div>
<button class="buttonlogin">
<span class="button-contentlogin">Entrar</span>
            </button> 
            <div class="conta">
                <p>Não tem uma conta?</p>
            </div>
           
            <div class="cadastre-se">
                <a href="cadastro.php"><p>Cadastre-se</p></a>
            </div>
           
                    
                    
                </div>
            </div>
            <?php
        include_once("templates/footer.php");
        ?>