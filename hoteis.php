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

<section class="fotologo">
            <div class="container">
            <img src="img/ararazoo1.png" width="800px"> 
             
            </div>  
        </section>
        
<div class="card-container">
    <div class="card">
        <div class="card-body">
            <a href="../sprint3/ho1.php">
            <img src="../sprint3/img/hoteis/hotel.jpg" alt="Imagem 1">
</a>
            <h5 class="card-title">Riviera Serena Resort</h5>
            <p class="card-text"><img src="img/estrela.PNG">4,7 <a>R$200,00</a></p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
        <a href="../sprint3/ho2.php">
            <img src="../sprint3/img/hoteis/hotel2.jpg" alt="Imagem 2">
</a>
            <h5 class="card-title">Maravilha nas Dunas Hotel & Spa</h5>
            <p class="card-text"><img src="img/estrela.PNG">4,93 <a>R$419,00</a></p>
        </div>
    </div>
<!-- teste -->
    <div class="card">
        <div class="card-body">
        <a href="../sprint3/ho1.php">
            <img src="../sprint3/img/hoteis/hotel3.jpg" alt="Imagem 3">
</a>
            <h5 class="card-title">Oásis Dourado Resort & Spa:</h5>
            <p class="card-text"><img src="img/estrela.PNG">4,87 <a>R$316,00</a></p>
        </div>
    </div>
</div>
<br>
  <div class="card-container">
    <div class="card">
        <div class="card-body">
        <a href="../sprint3/ho1.php">
            <img src="../sprint3/img/hoteis/hotel4.webp" alt="Imagem 3">
        </a>
            <h5 class="card-title">Retiro das Águas Tranquilas</h5>
            <p class="card-text"><img src="img/estrela.PNG">4,29 <a>R$200,00</a></p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
        <a href="../sprint3/ho2.php">
            <img src="../sprint3/img/hoteis/hotel5.jpg" alt="Imagem 3">
</a>
            <h5 class="card-title">Mirante do Horizonte Eterno:</h5>
            <p class="card-text"><img src="img/estrela.PNG">4,57 <a>R$419,00</a></p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
        <a href="../sprint3/ho1.php">
            <img src="../sprint3/img/hoteis/hotel6.jpg" alt="Imagem 3">
        </a>
            <h5 class="card-title">Serenata nas Colinas Resort:</h5>
            <p class="card-text"><img src="img/estrela.PNG">3,87 <a>R$316,00</a></p>
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
            <a href="../sprint3/ho1.php"><img src="../sprint3/img/hoteis/hotel${i+7}.webp" alt="Nova Imagem ${i+1}">
            </a>
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
