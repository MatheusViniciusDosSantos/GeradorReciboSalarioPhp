<html>

<head>
    <title>Recibo Salarial</title>
    <style type="text/css">
        .estiloBordaBotoes {
            border: 1px solid #333333;
            border-radius: 8px;
            padding: 5px;
        }

        .row {
            display: flex;
        }

        .column {
            flex: 50%;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <?php
        function gerarRecibo() {
            $valorSalario = $_POST["valorRecebido"];
            // $empregado = document.getElementById("empregado").value;
            // $aTituloDe = document.getElementById("aTituloDe").value;
            // $remuneracaoMes = document.getElementById("remuneracaoMes").value;
            // $empregador = document.getElementById("empregador").value;
            // $cpfCnpj = document.getElementById("cpf").value;
            // $cidade = document.getElementById("cidade").value;
            // $data = document.getElementById("data").value;
            // $chavePix = document.getElementById("chavePix").value;
            // $conta = document.getElementById("conta").value;
            // $agencia = document.getElementById("agencia").value;
            // $duasVias = document.getElementById("vias");
            // $mes = verificaMes(data);
        }
    ?>


    <div id="reciboPronto" style="display: none; background-color: #ffffff;">
        <button id="impressao" onclick="" style="background-color: #ffffff;">
            <div class="row" style="margin: 2px;">
                <div style="background-color: #ffffff; padding: 1px;">
                    <i class="fa fa-print" style="font-size:36px; color: #3273dc;"></i>
                </div>
                <div style="flex: 60%;">
                    <span style="font-size: xx-large; color: #3273dc;">Imprimir</span>
                </div>
            </div>
        </button>
        <br /> <br />

        <div id="reciboImprimir">
            <div id="reciboSalario" style="border: 2px solid #000000; padding: 20px;
                    border-radius: 8px;">
                <h3 style="text-align: center;">
                    Recibo de Salário
                </h3>
                <div class="row">
                    <div style="flex: 80%;"></div>
                    <div id="valorSalario" style="border: solid 1px #000000; margin: 10px; justify-content: flex-end;"></div>
                </div>

                <p id="paragrafoNome">
                    teste de paragrafo dentro da
                </p>
                <p id="paragrafoTitulo"></p>
                <p id="paragrafoValor" style="border: #000000 solid 1px;"></p>
                <p id="paragrafoTexto"></p>
                <p id="paragrafoChavePix"></p>
                <p id="paragrafoCidadeData" style="text-align: right;"></p>
                <br /><br />
                <span id="assinatura" style="border-top: 1px solid #999; margin: auto; display: block; width: 30%; text-align: center;"></span>
            </div>
            <br />

            <div id="reciboSalario2" style="border: 2px solid #000000; padding: 20px;
                        border-radius: 8px; display: none;">
                <h3 style="text-align: center;">
                    Recibo de Salário
                </h3>
                <div class="row">
                    <div style="flex: 80%;"></div>
                    <div id="valorSalario2" style="border: solid 1px #000000; margin: 10px; justify-content: flex-end;"></div>
                </div>

                <p id="paragrafoNome2"></p>
                <p id="paragrafoTitulo2"></p>
                <p id="paragrafoValor2" style="border: #000000 solid 1px;"></p>
                <p id="paragrafoTexto2"></p>
                <p id="paragrafoChavePix2"></p>
                <p id="paragrafoCidadeData2" style="text-align: right;"></p>
                <br /><br />
                <span id="assinatura2" style="border-top: 1px solid #999; margin: auto; display: block; width: 30%; text-align: center;"></span>
            </div>
            <br />
        </div>


        <button id="impressao" onclick="" style="background-color: #ffffff;">
            <div class="row" style="margin: 2px;">
                <div style="background-color: #ffffff; padding: 1px;">
                    <i class="fa fa-print" style="font-size:36px; color: #3273dc;"></i>
                </div>
                <div style="flex: 60%;">
                    <span style="font-size: xx-large; color: #3273dc;">Imprimir</span>
                </div>
            </div>
        </button>

    </div>
</body>

</html>