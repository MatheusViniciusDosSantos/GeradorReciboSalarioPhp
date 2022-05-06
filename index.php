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
    <div style="padding: 50px;">
        <form action="GerarReciboController.php" method="post">
            <div style="border: 2px solid #000000; padding: 20px;
                            border-radius: 8px;">
                <h1>Recibo Salarial</h1>
                <br /><br />
            
                <h5>Valor: </h5>
                <input id="valorRecebido" type="text" class="estiloBordaBotoes" style="width: 10%;" />
                <br />
            
                <h5>Empregado: </h5>
                <input id="empregado" type="text" class="estiloBordaBotoes" style="width: 50%;" />
                <br />
            
                <h5>À título de: </h5>
                <input id="aTituloDe" type="text" class="estiloBordaBotoes" style="width: 50%;" />
                <br />
            
                <h5>Remuneração mensal relativa à folha do mês: </h5>
                <input id="remuneracaoMes" type="text" class="estiloBordaBotoes" style="width: 30%;" />
                <br />
            
                <h5>Empregador</h5>
                <input id="empregador" type="text" class="estiloBordaBotoes" style="width: 50%;" />
                <br />
            
                <h5>CPF ou CNPJ: </h5>
                <input id="cpf" type="text" class="estiloBordaBotoes" style="width: 10%;" maxlength="18" />
                <br /><br />
            
                <div class="row">
                    <div class="column" style="border: 1px solid #000000; border-style: none solid none none; margin-right: 50px;">
                        <h5>Cidade: </h5>
                        <input id="cidade" type="text" class="estiloBordaBotoes" style="width: 40%;" />
                        <br />
                    </div>
                    <div class="column">
                        <h5>Data</h5>
                        <input id="data" type="date" class="estiloBordaBotoes" />
                        <br />
                    </div>
                </div>
                <br />
            
                <h5>Forma de Pagamento: </h5>
                <div class="row">
                    <div style="flex: 20%;">
                        <h5>Dinheiro </h5>
                        <input id="dinheiro" type="radio" name="pagamento" checked="checked" />
                        <br />
                    </div>
                    <div style="flex: 20%;">
                        <h5>Pix </h5>
                        <input id="pix" type="radio" name="pagamento" />
                        <br />
                    </div>
                    <div style="flex: 20%;">
                        <h5>Cheque </h5>
                        <input id="cheque" type="radio" name="pagamento" />
                        <br />
                    </div>
                    <div style="flex: 20%;">
                        <h5>Transferência/Depósito</h5>
                        <input id="transferenciaDeposito" type="radio" name="pagamento" />
                        <br />
                    </div>
                </div>
                <br />
                <div id="dinheiroDiv" style="display: none;"></div>
                <div id="pixDiv" style="display: none;">
                    <h5>Chave: </h5>
                    <input id="chavePix" type="text" class="estiloBordaBotoes" style="width: 10%;" />
                    <br />
                </div>
                <div id="transferenciaDepositoDiv" style="display: none;">
                    <h5>Conta: </h5>
                    <input id="conta" type="text" class="estiloBordaBotoes" style="width: 10%;" />
                    <br />
                    <h5>Agência: </h5>
                    <input id="agencia" type="text" class="estiloBordaBotoes" style="width: 10%;" />
                    <br />
                </div>
                <div id="chequeDiv" style="display: none;">
                    <h5>Conta: </h5>
                    <input id="conta" type="text" class="estiloBordaBotoes" style="width: 10%;" />
                    <br />
                    <h5>Agência: </h5>
                    <input id="agencia" type="text" class="estiloBordaBotoes" style="width: 10%;" />
                    <br />
                </div>
                <br /><br />
            
                <h5>Duas vias: </h5>
                <input id="vias" type="checkbox" />
                <br /><br />
            
                <button type="submit"
                    style="background-color: #3273dc; border: 1px solid transparent; border-radius: 8px;">
                    <div class="row" style="margin: 2px;">
                        <div style="background-color: #ffffff; padding: 1px;">
                            <i class="fa fa-file-text" style="font-size:36px; color: #3273dc;"></i>
                        </div>
                        <div style="flex: 60%;">
                            <span style="font-size: xx-large; color: #ffffff;">Gerar Recibo</span>
                        </div>
                    </div>
                </button>
            </div>
            </br></br>
        </form>
    </div>
</body>

</html>