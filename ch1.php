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
 <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
    width: 85%;
    height: 530px;
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
    overflow: hidden;
}

.com1{
    color:#3F6CF4;
    margin: 90px;
    width: 100%;
    height: 300px;
    display: flex;
    justify-content: space-between;
    overflow: hidden;
    
}
.com2{
    color:#3F7CF4;
    width: 100px;
    margin-left: -500px;
}
label {
      font-size: 18px;
      margin-bottom: 10px;
      color: #333;
    }

    .datepicker,
    #quantidadeHospedes {
      font-size: 16px;
      padding: 10px;
      margin-bottom: 10px;
      border: none;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 100%; /* Largura máxima para todos os dispositivos */
      box-sizing: border-box; /* Evita que a largura seja afetada pelo preenchimento e borda */
    }

    #btnReservar {
      font-size: 16px;
      padding: 10px;
      background-color: #FFBC49;
      color: white;
      border: none;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      cursor: pointer;
    }
    .praga{
        background-color: #f3f3f3;
        padding: 100px;
        border-radius: 40px;
    }
    @media (min-width: 768px) {
      /* Ajusta estilos para dispositivos com largura de tela igual ou superior a 768 pixels */
      .praga body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
      }

      .praga {
        text-align: center;
        max-width: 600px; /* Define uma largura máxima para o contêiner */
        margin: 0 auto; /* Centraliza o contêiner */
      }
    }
    #quantidadeHospedes {
      font-size: 16px;
      padding: 10px;
      margin-bottom: 10px;
      border: none;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    #btnReservar {
      font-size: 16px;
      padding: 10px 270px;
      background-color: #FFBC49;
      color: white;
      border: none;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      cursor: pointer;
    }
    .comentarios img{
        width: 645px;
        height: 223px;

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
<br>
<br>
<br>
<br>
<div class="praga"style="text-align: center;">
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
<div class="mostrarmais-container">
    <button class="mostrarmais">MOSTRAR MAIS</button>
</div>
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
