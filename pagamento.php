<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

</head>
<style>
    .oppagamento{
        display: flex;
        margin-left: 120px;
    }
    .oppagamento img{
        width: 50%;
        margin: none;
    }
    #pix{
        margin-top: 100px;

    }
    #boleto{
        margin-top: 100px;
    }
    #boleto button{
        margin-left: -10PX;
        margin-top: 70px;
    }
    #cartao button{
        margin-top: -100px;
    }
    #pix button{
        margin-top: 80px;
    }

    .oppagamento button{
        margin: 45px;
        width: 200px;
        height: 40px;
        border-radius: 30px;
        background-color: #FFBC49;
        font-weight: bold;
        border:none;
    }

</style>
<body>

<?php
  include_once("templates/header.php");
?>


<div class="card-container"> 
    <div class="card">
        <div class="card-body">
            <img src="img/saolourenco.webp" alt="Imagem 1">
            <h5 class="card-title">Chácara São Lorenço</h5>
            <p class="card-text"><img src="img/estrela.PNG">4,7 <a>R$200,00</a></p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <img src="img/piscina.webp" alt="Imagem 2">
            <h5 class="card-title">Casa com Piscina Maranhão</h5>
            <p class="card-text"><img src="img/estrela.PNG">4,93 <a>R$419,00</a></p>
        </div>
    </div>
<!-- teste -->
    <div class="card">
        <div class="card-body">
            <img src="img/sala.webp" alt="Imagem 3">
            <h5 class="card-title">Chalé em Rio Grande da Serra</h5>
            <p class="card-text"><img src="img/estrela.PNG">4,87 <a>R$316,00</a></p>
        </div>
    </div>
</div>
<br>
  <div class="card-container" id="cardContainer">
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
    <button class="mostrarmais" onclick="showMoreCards()">MOSTRAR MAIS</button>
</div>
<div class="oppagamento">
    <div id="pix"><img src="img/pix.svg">
    <button>PIX</button>
    </div>
    <div id="cartao"><img src="img/cartao.webp"><button>CARTÃO</button></div>
    <div id="boleto"><img src="img/boleto.webp"><button>BOLETO</button></div>
</div>
        <footer>
            <?php
            include_once("templates/footer.php");
            ?>
        </footer>
</body>
</html>
