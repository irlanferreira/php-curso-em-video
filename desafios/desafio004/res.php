<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $rs = $_POST['num'] ?? 1;
        if($rs == ""){
            $rs = 1;
        }
        $rs = str_replace(",",".",$rs);

        date_default_timezone_set('America/Sao_Paulo');
        $dia = date("d");
        $mes = date("m");
        $ano = date('Y');

        $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='$mes-$dia-$ano'&\$top=100&\$format=json&\$select=cotacaoCompra";
        
        $api_resposta = file_get_contents("$url");
        $json_resposta = json_decode($api_resposta);
        $cotacao = $json_resposta->value[0]->cotacaoCompra;
        
        $dollar = $rs * $cotacao;
    ?>
    <h1>Resultado</h1>
    <p>Você tem R$<?=$rs?> na carteira.</p>
    <p>Convertendo para dolar, você tem $<?=$dollar?></p>
    <p>A cotação do dólar hoje está em $<?=$cotacao?></p>
</body>
</html>