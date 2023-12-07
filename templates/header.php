<!DOCTYPE html>
<html>
  <body>
    <header>
    <div class="navbar">
      <div class="subnav">
        <a href="index.php"><img src="../sprint3/img/logoprin.png" alt="Logo"></a>
        <div class="logo">
            <a href="#"><img src="../sprint3/img/logocentra.png"></a>
        </div>
        <div class="login">
            <img src="../sprint3/img/login.png" alt="Login">
        </div>
      </div>
      <div class="subnav2">
          <a href="../sprint3/piscinas.php"><img src="../sprint3/img/piscinaslogo.png"></a>
          <a href="../sprint3/beiramar.php"><img src="../sprint3/img/beiramar.png"></a>
          <a href="../sprint3/hoteis.php"><img src="../sprint3/img/hoteis.png"></a>
          <a href="../sprint3/chales.php"><img src="../sprint3/img/chale.png"></a>
          <a href="../sprint3/montanhas.php"><img src="../sprint3/img/montanhas.png"></a>
      </div>
    </div>
    <br>
    <br>
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
        background-color: #FFBC49;
        top: 50px;
        justify-content: center;
        gap: 10%; 
        padding: 8px 14px;
    }
    </style>
  </body>
</html>
