<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
  include_once("templates/header.php");
?>
<style>
.texto p{
    margin: 0px 120px;
    text-align: justify;
    line-height: 2em;
}
.texto h1{
    margin: 40px 120px;
}
.texto h1 img{
    width: 3%;
    margin-left: 40%;
}
.container img{
    width: 60%;
    height: 556px;
    border-radius: 50px;
}
.mostrarmais-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 30vh;
}

.mostrarmais {
    padding: 10px 20px;
    background-color: #544013;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.mostrarmais:hover {
    background-color: #3F6CF4;
}
.comentarios{
    display: flex;
    justify-content: space-between;
    margin: 1em 12em;
}
.com1{
    color:#3F6CF4;
    width: 100px;
    
}
.com2{
    color:#3F7CF4;
    width: 100px;
}
</style>
<body>

<div class="container">
<img src="img/saolourenco.webp" alt="Imagem 1">
</div>

<div class="texto">
    <h1>Chácara Encantadora em São Lourenço<img src="img/estrela.png">4,47</h1>
    <br>
    <p>Bem-vindo à Chácara Serenidade, uma propriedade encantadora disponível para aluguel por temporada em São Lourenço. Rodeada pela exuberante natureza local, esta chácara oferece tranquilidade e conforto para momentos de descanso. Com uma espaçosa área verde, piscina privativa e jardins paisagísticos, é o local ideal para atividades ao ar livre e piqueniques. A casa principal, aconchegante e decorada com elegância, possui varandas com vistas panorâmicas. A chácara ainda oferece um espaço gourmet com churrasqueira, atividades recreativas e está estrategicamente localizada para fácil acesso às atrações locais. Com capacidade para até 10 pessoas, é perfeita para famílias, grupos de amigos ou retiros. Entre em contato para informações sobre reservas e disponibilidade. A Chácara Serenidade promete criar memórias inesquecíveis em meio à serenidade da natureza. Reserve agora e vivencie essa experiência única!</p>
</div>
<div class="comentarios">
    <div class="com1">aaaaa</div>
    <div class="com2">aaaaaa</div>
</div>
<div class="areacompra">
    
</div>

<br>
  <div class="card-container">
    <div class="card">
        <div class="card-body">
            <img src="img/beliche.webp" alt="Imagem 3">
            <h5 class="card-title">Casa em Suzano</h5>
            <p class="card-text"><img src="img/estrela.PNG">4,29 <a>R$200,00</a></p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <img src="img/cozinha.webp" alt="Imagem 3">
            <h5 class="card-title">Chácara em Caraguatatininga</h5>
            <p class="card-text"><img src="img/estrela.PNG">4,57 <a>R$419,00</a></p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <img src="img/espaco.webp" alt="Imagem 3">
            <h5 class="card-title">Rio de Janeiro House</h5>
            <p class="card-text"><img src="img/estrela.PNG">3,87 <a>R$316,00</a></p>
        </div>
    </div>
  </div>
<BR>
<BR>
<div class="mostrarmais-container">
    <button class="mostrarmais">MOSTRAR MAIS</button>
</div>
        <footer>
            <?php
            include_once("templates/footer.php");
            ?>
        </footer>
</body>
</html>
