<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
</head>
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
