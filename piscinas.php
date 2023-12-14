<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="icon" href="img/logoprin.png">
    
    
</head>
<body>


<?php
  include_once("templates/header.php");
?>

<div class="card-container">
    <div class="card">
        <div class="card-body">
            <a href="pi1.php">
            <img src="img/piscinas/piscina.webp" alt="Imagem 1"></a>
            <h5 class="card-title">Casa com piscina Maranhão</h5>
            <p class="card-text"><img src="img/estrela.PNG">4,93 <a>R$419,00</p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <a href="pi2.php">
            <img src="img/piscinas/piscinas1.webp" alt="Imagem 2"></a>
            <h5 class="card-title">Characas em Minas Gerais</h5>
            <p class="card-text"><img src="img/estrela.PNG">4,98 <a>R$316,00</p>
        </div>
    </div>
<!-- teste -->
    <div class="card">
        <div class="card-body">
            <a href="pi3.php">
            <img src="img/piscinas/piscinas2.webp" alt="Imagem 3"></a>
            <h5 class="card-title">Casa com piscina luxuosa</h5>
            <p class="card-text"><img src="img/estrela.PNG">4,67 <a>R$416,00</p>
        </div>
    </div>
</div>
<br>
  <div class="card-container">
    <div class="card">
        <div class="card-body">
            <a href="pi4.php">
            <img src="img/piscinas/piscinas3.webp" alt="Imagem 3"></a>
            <h5 class="card-title">Chacara com piscina aquecida</h5>
            <p class="card-text"><img src="img/estrela.PNG">4,99 <a>R$500,00</p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <a href="pi5.php">
            <img src="img/piscinas/piscinas4.webp" alt="Imagem 3"></a>
            <h5 class="card-title">Chácara em Maceio</h5>
            <p class="card-text"><img src="img/estrela.PNG">4,37 <a>R$419,00</p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <a href="pi6.php">
            <img src="img/piscinas/piscinas6.webp" alt="Imagem 3"></a>
            <h5 class="card-title">Linda casa em Fortaleza</h5>
            <p class="card-text"><img src="img/estrela.PNG">5,00 <a>R$216,00</p>
        </div>
    </div>
  </div>
<BR>
<BR>
<div class="card-container" id="cardContainer">

    <!-- Cartões adicionados pelo botão MOSTRAR MAIS serão inseridos aqui -->
</div>
<div class="mostrarmais-container">
    <button class="mostrarmais" onclick="showMoreCards()">MOSTRAR MAIS</button>
</div>
<br>
<br>
<br>
        <footer>
            <?php
            include_once("templates/footer.php");
            ?>
        </footer>
        <script>
    // script.js
    let cardContainer = document.getElementById("cardContainer");

function showMoreCards() {
    // Informações para os novos cards
    const newCardInfo = [
        { name: "Casa Tropical", rating: "4,50", price: "R$190,00" },
        { name: "Casa Vila Tramontano", rating: "5,00", price: "R$369,00" },
        { name: "Casa em Cotia", rating: "4,82", price: "R$299,00" }
    ];

    // Create new card elements and append them to the card container
    for (let i = 0; i < newCardInfo.length; i++) {
        let newCard = document.createElement("div");
        newCard.classList.add("card");
        newCard.innerHTML = `
            <div class="card-body">
                <img src="img/piscinas/piscinas${i+1}.webp" alt="Nova Imagem ${i+1}">
                <h5 class="card-title">${newCardInfo[i].name}</h5>
                <p class="card-text"><img src="img/estrela.PNG">${newCardInfo[i].rating} <a>${newCardInfo[i].price}</a></p>
            </div>
            <br>
        `;
        cardContainer.appendChild(newCard);
    }

    // Ocultar o botão MOSTRAR MAIS
    document.querySelector(".mostrarmais-container").style.display = "none";
}
</script>

</body>
</html>
