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
            <a href="../sprint3/be1.php">
            <img src="img/beiramar/beiramar1.jpg" alt="Imagem 1">
            </a>
            <h5 class="card-title">Apê Praia Guilhermina</h5>
            <p class="card-text"><img src="img/estrela.PNG">4,7 <a>R$200,00</a></p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
        <a href="../sprint3/be2.php">
            <img src="img/beiramar/beiramar2.jpg" alt="Imagem 2">
        </a>
            <h5 class="card-title">Casa Orla Peruíbe Beach </h5>
            <p class="card-text"><img src="img/estrela.PNG">4,93 <a>R$419,00</a></p>
        </div>
    </div>
<!-- teste -->
    <div class="card">
        <div class="card-body">
            <a href="../sprint3/be3.php">
            <img src="img/beiramar/beiramar3.jpg" alt="Imagem 3">
        </a>
            <h5 class="card-title">Hotel Copacabana Palace</h5>
            <p class="card-text"><img src="img/estrela.PNG">4,87 <a>R$1316,00</a></p>
        </div>
    </div>
</div>
<br>
  <div class="card-container">
    <div class="card">
        <div class="card-body">
            <a href="../sprint3/be4.php">
            <img src="img/beiramar/beiramar4.jpg" alt="Imagem 3">
        </a>
            <h5 class="card-title">Hotel Beira Mar</h5>
            <p class="card-text"><img src="img/estrela.PNG">4,29 <a>R$600,00</a></p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <img src="img/beiramar/beiramar5.jpg" alt="Imagem 3">
            <h5 class="card-title">Hotel Jequetimar</h5>
            <p class="card-text"><img src="img/estrela.PNG">4,57 <a>R$819,00</a></p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <img src="img/beiramar/beiramar6.jpg" alt="Imagem 3">
            <h5 class="card-title">Apê Orla de Mongaguá</h5>
            <p class="card-text"><img src="img/estrela.PNG">3,87 <a>R$216,00</a></p>
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
        { name: "Apê José Menino", rating: "4,50", price: "R$190,00" },
        { name: "Resort Maragogi", rating: "5,00", price: "R$1369,00" },
        { name: "Apê no Guaruja", rating: "4,82", price: "R$299,00" }
    ];

    // Create new card elements and append them to the card container
    for (let i = 0; i < newCardInfo.length; i++) {
        let newCard = document.createElement("div");
        newCard.classList.add("card");
        newCard.innerHTML = `
            <div class="card-body">
                <img src="../sprint3/img/beiramar/beiramar${i+7}.jpg" alt="Nova Imagem ${i+1}">
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
