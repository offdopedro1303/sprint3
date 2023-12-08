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
    #confirmacao {
    background-color: #ffffff;
    border: 1px solid #e0e0e0;
    border-radius: 40px 0px 0px 40px;
    padding: 20px;
    margin: 20px auto;
    width: 70%;
    height: 460px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    
}

#confirmacao h1 {
    color: #333;
    font-size: 40px;
}

#confirmacao p {
    font-size: 18px;
    margin-bottom: 10px;
}

#confirmacao span {
    font-weight: bold;
    color: #FFBC49;
}
#containerconf{
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 100px;
}
#containerconf img{
    height: 500px;
    width: 30%;
    border-radius: 0px 40px 40px 0px;
}
button {
 background: transparent;
 position: relative;
 padding: 5px 15px;
 display: flex;
 align-items: center;
 font-size: 17px;
 font-weight: 600;
 text-decoration: none;
 cursor: pointer;
 border: 1px solid 1px #FFBC49;;
 border-radius: 25px;
 outline: none;
 overflow: hidden;
 color: #FFBC49;;
 transition: color 0.3s 0.1s ease-out;
 text-align: center;
}

button span {
 margin: 10px;
}

button::before {
 position: absolute;
 top: 0;
 left: 0;
 right: 0;
 bottom: 0;
 margin: auto;
 content: '';
 border-radius: 50%;
 display: block;
 width: 20em;
 height: 20em;
 left: -5em;
 text-align: center;
 transition: box-shadow 0.5s ease-out;
 z-index: -1;
}

button:hover {
 color: #fff;
 border: 1px solid #FFBC49;
}

button:hover::before {
 box-shadow: inset 0 0 0 10em #FFBC49;;
}
 



</style>
<body>

<?php
 include_once("templates/header.php");
?>

<DIV ID="containerconf">
<div id="confirmacao" style="text-align: center;">
    <h1>Reserva Confirmada!</h1>
    <br>
    <br>
    <p>Data de Chegada: <span id="chegadaReservaData"></span></p>
    <p>Data de Saída: <span id="saidaReservaData"></span></p>
    <p>Quantidade de Hóspedes: <span id="quantidadeHospedes"></span></p>
    <p>Total de dias: <span id="totalDias"></span></p>
    <p>Taxa de Serviço: R$<span id="taxaServico"></span></p>
    <p>Valor Total: R$<span id="valorTotal"></span></p>
 </div>
 <IMG src="img/saolourenco.webp">
</DIV>
<div class="oppagamento">
    <div id="pix"><img src="img/pix.svg">
    <button>PIX</button>
    </div>
    <div id="cartao"><img src="img/cartao.webp"><button>CARTÃO</button></div>
    <div id="boleto"><img src="img/boleto.webp"><button>BOLETO</button></div>
</div>
<br>
<br>
<br>
<br>
<Br>
<br>
<br>
        <footer>
            <?php
            include_once("templates/footer.php");
            ?>
        </footer>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
 <script>
    const chegadaReserva = JSON.parse(localStorage.getItem("chegadaReserva")) || {};
    const saidaReserva = JSON.parse(localStorage.getItem("saidaReserva")) || {};
    const quantidadeHospedes = localStorage.getItem("quantidadeHospedes") || 1;

    const dataChegada = new Date(chegadaReserva.data);
    const dataSaida = new Date(saidaReserva.data);

    const diffEmMilissegundos = dataSaida - dataChegada;
    const diffEmDias = Math.ceil(diffEmMilissegundos / (1000 * 60 * 60 * 24));
    const taxaServico = 250;
    const valorTotal = diffEmDias * 100 + taxaServico;

    const formatter = new Intl.DateTimeFormat('pt-BR');
    const chegadaFormatada = formatter.format(dataChegada);
    const saidaFormatada = formatter.format(dataSaida);

    document.getElementById("chegadaReservaData").textContent = chegadaFormatada || "Não disponível";
    document.getElementById("saidaReservaData").textContent = saidaFormatada || "Não disponível";
    document.getElementById("quantidadeHospedes").textContent = quantidadeHospedes || 1;
    document.getElementById("totalDias").textContent = diffEmDias;
    document.getElementById("taxaServico").textContent = taxaServico;
    document.getElementById("valorTotal").textContent = valorTotal;
 </script>

</html>
