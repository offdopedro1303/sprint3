  <!DOCTYPE html>
<html>
  <body>
    <header>
        <div class="navbar">
            <div class="subnav">
                <a href="../index.php"><img src="../login/img/logoprin.png" alt="Logo"></a>
                <div class="logo">
                    <a href="#"><img src="../login/img/logocentra.png"></a>
                </div>
                <a href="index.php">
                <div class="login">
                    <img src="../login/img/login.png" alt="Login">
                </div>
                </a>
            </div>
            <div class="subnav2">
                <a href="../piscinas.php"><button class="button2" href="../piscinas.php"><img src="../login/img/piscinaslogo.png"></button></a>
                <a href="../beiramar.php"><button class="button2"><img src="../login/img/beiramar.png"></button></a>
                <a href="../hoteis.php"><button class="button2"><img src="../login/img/hoteis.png"></button></a>
                <a href="../chales.php"><button class="button2"><img src="../login/img/chale.png"></button></a>
                <a href="../montanhas.php"><button class="button2"><img src="../login/img/montanhas.png"></button></a>
            </div>
        </div>
    </header>
    <style>
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
      position: relative;
        display: flex;
        background-color: #EBD09D;
        top: 50px;
        justify-content: center;
        gap: 10%; 
        padding: 8px 14px;
    }

    .button {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #EBD09D;
  outline-offset: -3px;
  border: none;
  cursor: pointer;
  transition: 400ms;
}


.button svg path {
  transition: 400ms;
}

.button:hover {
  background-color: #FFBC49;
}

.button:hover svg path {
  fill: #007ACC;
}
    </style>
  </body>
</html>

