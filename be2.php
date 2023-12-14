<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logoprin.png">
</head>

 <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<body>
<?php
  include_once("templates/header.php");
?>

<div class="container">
<img src="img/beiramar/beiramar2.jpg" alt="Imagem 1">
</div>

<div class="texto">
    <h1>Casa Orla Peruíbe Beach <img src="img/estrela.png">   4,47 </h1>
    <br>
    <p>A Casa Orla Peruíbe Beach é uma residência encantadora situada à beira-mar, na deslumbrante Praia Grande do litoral sul paulista. Com um design elegante e uma localização privilegiada, esta casa oferece uma experiência única de vida à beira-mar, combinando conforto, luxo e proximidade com a natureza.

Ao adentrar a propriedade, você será recepcionado por um jardim bem cuidado e uma fachada convidativa. A arquitetura da casa reflete o charme costeiro, com elementos como varandas espaçosas, grandes janelas e talvez até um terraço panorâmico, proporcionando vistas deslumbrantes do oceano.

O interior da Casa Orla Peruíbe Beach é um deleite para os sentidos. Os espaços são elegantemente decorados, combinando elementos contemporâneos com toques náuticos e materiais naturais. A sala de estar é um ambiente acolhedor, com mobiliário confortável e talvez uma lareira para as noites mais frescas. As grandes janelas ou portas de vidro deslizantes conectam o interior ao exterior, permitindo que a luz natural e a brisa marinha fluam livremente.

A cozinha é equipada com aparelhos modernos e pode apresentar uma ilha central, proporcionando um espaço funcional para a preparação de refeições gourmet. A sala de jantar, estrategicamente posicionada para oferecer vistas para o mar, é perfeita para refeições memoráveis em um ambiente sofisticado.

Os quartos na Casa Orla Peruíbe Beach são verdadeiros refúgios de relaxamento. Os quartos principais podem ter vista para o oceano, com varandas privativas para apreciar o nascer do sol sobre as águas. Os banheiros podem apresentar detalhes luxuosos, como banheiras de hidromassagem ou chuveiros espaçosos.

O quintal da casa é um verdadeiro paraíso à beira-mar. Pode incluir uma piscina com vista para o oceano, áreas de lounge ao ar livre, um espaço para churrasco e até mesmo uma entrada privativa para a praia. É o local ideal para entretenimento ao ar livre, momentos de relaxamento e atividades à beira-mar.

A Casa Orla Peruíbe Beach é mais do que uma residência; é um retiro exclusivo que combina o confort</p>
</div>
<br>
<br>
<br>
<br>
<div class="ben"style="text-align: center;">
    <label for="datepickerChegada">Data de Chegada:</label>
    <input type="text" id="datepickerChegada" class="datepicker" readonly>

    <label for="datepickerSaida">Data de Saída:</label>
    <input type="text" id="datepickerSaida" class="datepicker" readonly>

    <label for="quantidadeHospedes">Quantidade de Hóspedes:</label>
    <input type="number" id="quantidadeHospedes" min="1" value="1">

    <button id="btnReservar">Reservar</button>
  </div>

<div class="comentarios">
    <div class="com1"><img src="../sprint3/img/comentarios/comentario1.png"><img src="../sprint3/img/comentarios/comentario2.png"></div>
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
        <footer>
            <?php
            include_once("templates/footer.php");
            ?>
        </footer>
</body>
<script>
    $(function() {
      $("#datepickerChegada").datepicker({
        dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
        dayNamesMin: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'],
        monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
        nextText: 'Próximo',
        prevText: 'Anterior',
      });

      $("#datepickerSaida").datepicker({
        dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
        dayNamesMin: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'],
        monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
        nextText: 'Próximo',
        prevText: 'Anterior',
      });

      $("#btnReservar").on("click", function() {
        const chegadaSelecionada = $("#datepickerChegada").datepicker("getDate");
        const saidaSelecionada = $("#datepickerSaida").datepicker("getDate");
        const quantidadeHospedes = $("#quantidadeHospedes").val();

        const chegadaFormatada = $.datepicker.formatDate('mm/dd/yy', chegadaSelecionada);
        const saidaFormatada = $.datepicker.formatDate('mm/dd/yy', saidaSelecionada);

        localStorage.setItem("chegadaReserva", JSON.stringify({ data: chegadaFormatada, valor: 100 }));
        localStorage.setItem("saidaReserva", JSON.stringify({ data: saidaFormatada, valor: 100 }));
        localStorage.setItem("quantidadeHospedes", quantidadeHospedes);

        window.location.href = "pagamento.php";
      });
    });
  </script>
</html>