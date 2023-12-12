<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logoprin.png">
    
    
</head>
<body>

<?php
  include_once("templates/header.php");
?>

<div class="card-container">
    <div class="card">
        <div class="card-body">
            <a href="ch1.php"><img src="img/chales/chale1.jpg" alt="Imagem 1"></a>
            <h5 class="card-title">Chalé Portal da Serra</h5>
            <p class="card-text"><img src="img/estrela.PNG">4,7 <a>R$300,00</a></p>
        </div>
        
    </div>

    <div class="card">
        <div class="card-body">
            <a href="ch2.php"><img src="img/chales/chale2.jpg" alt="Imagem 2"></a>
            <h5 class="card-title">Chalés Araucária e Manacá</h5>
            <p class="card-text"><img src="img/estrela.PNG">4,93 <a>R$239,00</a></p>
        </div>
    </div>
<!-- teste -->
    <div class="card">
        <div class="card-body">
            <a href="ch3.php"><img src="img/chales/chale3.jpg" alt="Imagem 3"></a>
            <h5 class="card-title">Cabana Nativa</h5>
            <p class="card-text"><img src="img/estrela.PNG">4,87 <a>R$324,00</a></p>
        </div>
    </div>
</div>
<br>
  <div class="card-container">
    <div class="card">
        <div class="card-body">
            <a href="ch4.php"><img src="img/chales/chale4.jpg" alt="Imagem 3"></a>
            <h5 class="card-title">Chalé Refúgio da Pedra</h5>
            <p class="card-text"><img src="img/estrela.PNG">4,29 <a>R$230,00</a></p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <a href="ch5.php"><img src="img/chales/chale5.jpg" alt="Imagem 3"></a>
            <h5 class="card-title">Cabana Horizonte</h5>
            <p class="card-text"><img src="img/estrela.PNG">4,57 <a>R$215,00</a></p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <a href="ch6.php"><img src="img/chales/chale6.jpg" alt="Imagem 3"></a>
            <h5 class="card-title">Villa Garibaldi</h5>
            <p class="card-text"><img src="img/estrela.PNG">3,87 <a>R$199,00</a></p>
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
        { name: "Chalé da Mantiqueira", rating: "4,50", price: "R$235,00" },
        { name: "Chalés Montanha Pousada", rating: "5,00", price: "R$358,00" },
        { name: "Chalé da Montanha ", rating: "4,82", price: "R$387,00" }
    ];

    // Create new card elements and append them to the card container
    for (let i = 0; i < newCardInfo.length; i++) {
        let newCard = document.createElement("div");
        newCard.classList.add("card");
        newCard.innerHTML = `
            <div class="card-body">
                <a href="ch${i+7}.php"><img src="img/chales/chale${i+7}.jpg" alt="Nova Imagem ${i+7}"></a>
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
