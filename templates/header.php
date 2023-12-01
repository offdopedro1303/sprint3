<!DOCTYPE html>
<html>
  <body>
    <header>
    <div class="navbar dropdown">
      <img src="../sprint3/img/Logo (2).png" alt="Logo">
      <div class="logo">
          <img src="../sprint3/img/Logo (3).png">
      </div>
      <div class="login">
          <img src="../sprint3/img/login.png" alt="Login">
      </div>
      <div class="subnav">
          <a href="../sprint3/piscinas.php"><img src="img/piscinaslogo.png"></a>
          <a href="../sprint3/beiramar.php"><img src="../sprint3/img/beiramar.png"></a>
          <a href="../sprint3/hoteis.php"><img src="../sprint3/img/hoteis.png"></a>
          <a href="../sprint3/chales.php"><img src="../sprint3/img/chale.png"></a>
          <a href="../sprint3/montanhas.php"><img src="../sprint3/img/montanhas.png"></a>
      </div>
    </div>
    </header>
    <style>
      .navbar {
    background-color: #544013;
    overflow: hidden;
display: block;
}

.navbar img {
    float: left;
    margin-top: 5px;
    margin-left: 10px;
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
    margin-right: 1px;
}
.login img {
    height: 30px; /* Ajuste conforme necessário */
    margin-left: 10px; /* Ajuste conforme necessário */
    margin-top: -50px;
}
.subnav {
    display: none;
    background-color: #F4F0D8;
    overflow: hidden;
}
.subnav a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
.dropdown:hover .subnav {
    display: block;
}
    </style>
  </body>
</html>
