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
            $empregado = $_POST["empregado"];
            $aTituloDe = $_POST["aTituloDe"];
            $remuneracaoMes = $_POST["remuneracaoMes"];
            $empregador = $_POST["empregador"];
            $cpfCnpj = $_POST["cpf"];
            $cidade = $_POST["cidade"];
            $data = $_POST["data"];
            $chavePix = $_POST["chavePix"];
            $conta = $_POST["conta"];
            $agencia = $_POST["agencia"];
            $duasVias = $_POST["vias"];
            $mes = verificaMes(data);
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
                    Eu, <?php echo $empregado ?>
                </p>
                <p id="paragrafoTitulo"> 
                    Declaro para todos os efeitos, ter recebido a título de <?php echo $aTituloDe ?> a importância de:
                </p>
                <p id="paragrafoValor" style="border: #000000 solid 1px;">
                    <?php
                        ($valorSalario.strval() == '1' ? strtoupper($valorSalario.strval().extenso() + " real") : strtoupper($valorSalario.strval().extenso() + " reais"))
                    ?>
                </p>
                <p id="paragrafoTexto">
                    e em concordância com o disposto no Art. 462, da CLT, tenho plena consciência de que o respectivo 
                    valor será descontado, pelo empregador: <?php echo $empregador ?>, CNPJ: <?php echo $cpfCnpj ?>, do pagamento da minha remuneração mensal relativa à folha do mês de 
                    <?php echo $remuneracaoMes ?> e incidindo na base de cálculo de encargos sociais e fiscais para todos os efeitos legais.";
                </p>
                <p id="paragrafoChavePix">
                    <?php if($chavePix != null && $chavePix != ) {
                        echo "Pagamento realizado pelo Pix: " . $chavePix;
                    }
                    if ($conta != null && $conta != "" && $agencia != null && $agencia != "") {
                        echo "Pagamento realizado na conta: " . $conta . ", agência: " . $agencia;
                    } ?>
                </p>
                <p id="paragrafoCidadeData" style="text-align: right;">
                    <?php 
                        $cidade . ", " . $data[8] . $data[9] . " de " . $mes + " de " . $data[0] . $data[1] . $data[2] . $data[3];
                    ?>
                </p>
                <br /><br />
                <span id="assinatura" style="border-top: 1px solid #999; margin: auto; display: block; width: 30%; text-align: center;">
                    <?php echo $empregado ?>
                </span>
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

                <p id="paragrafoNome2">
                    Eu, <?php echo $empregado ?></p>
                <p id="paragrafoTitulo2">
                    Declaro para todos os efeitos, ter recebido a título de <?php echo $aTituloDe ?> a importância de:
                </p>
                <p id="paragrafoValor2" style="border: #000000 solid 1px;">
                    <?php
                        ($valorSalario.strval() == '1' ? strtoupper($valorSalario.strval().extenso() + " real") : strtoupper($valorSalario.strval().extenso() + " reais"))
                    ?>
                </p>
                <p id="paragrafoTexto2">
                    e em concordância com o disposto no Art. 462, da CLT, tenho plena consciência de que o respectivo 
                    valor será descontado, pelo empregador: <?php echo $empregador ?>, CNPJ: <?php echo $cpfCnpj ?>, do pagamento da minha remuneração mensal relativa à folha do mês de 
                    <?php echo $remuneracaoMes ?> e incidindo na base de cálculo de encargos sociais e fiscais para todos os efeitos legais.";
                </p>
                <p id="paragrafoChavePix2">
                    <?php if($chavePix != null && $chavePix != ) {
                        echo "Pagamento realizado pelo Pix: " . $chavePix;
                    }
                    if ($conta != null && $conta != "" && $agencia != null && $agencia != "") {
                        echo "Pagamento realizado na conta: " . $conta . ", agência: " . $agencia;
                    } ?>
                </p>
                <p id="paragrafoCidadeData2" style="text-align: right;">
                    <?php 
                        echo $cidade . ", " . $data[8] . $data[9] . " de " . $mes + " de " . $data[0] . $data[1] . $data[2] . $data[3];
                    ?>
                </p>
                <br /><br />
                <span id="assinatura2" style="border-top: 1px solid #999; margin: auto; display: block; width: 30%; text-align: center;">
                    <?php echo $empregado ?>
                </span>
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