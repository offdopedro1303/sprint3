<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

 <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<body>
<?php
  include_once("templates/header.php");
?>

<div class="container">
<img src="img/saolourenco.webp" alt="Imagem 1">
</div>

<div class="texto">
    <h1>Chácara Encantadora em São Lourenço
      <div class="estrela"><img src="img/estrela.png">4,47
      </div>
    </h1>
    <br>
    <p>Bem-vindo à Chácara Serenidade, uma propriedade encantadora disponível para aluguel por temporada em São Lourenço. Rodeada pela exuberante natureza local, esta chácara oferece tranquilidade e conforto para momentos de descanso. Com uma espaçosa área verde, piscina privativa e jardins paisagísticos, é o local ideal para atividades ao ar livre e piqueniques. A casa principal, aconchegante e decorada com elegância, possui varandas com vistas panorâmicas. A chácara ainda oferece um espaço gourmet com churrasqueira, atividades recreativas e está estrategicamente localizada para fácil acesso às atrações locais. Com capacidade para até 10 pessoas, é perfeita para famílias, grupos de amigos ou retiros. Entre em contato para informações sobre reservas e disponibilidade. A Chácara Serenidade promete criar memórias inesquecíveis em meio à serenidade da natureza. Reserve agora e vivencie essa experiência única!</p>
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
    <div class="com1"><img src="img/comentario1.png"><img src="img/comentario2.png"></div>
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
                <img src="img/piscinas${i+1}.webp" alt="Nova Imagem ${i+1}">
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