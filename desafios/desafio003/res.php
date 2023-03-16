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
        $dollar = $rs * 5.22;
    ?>
    <h1>Resultado</h1>
    <p>Você tem R$<?=$rs?> na carteira.</p>
    <p>Convertendo para dolar, você tem $<?=$dollar?></p>
</body>
</html>