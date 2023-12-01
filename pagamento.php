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
    border-radius: 8px;
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
</html>
