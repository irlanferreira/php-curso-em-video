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
        $num = $_POST['num'] ?? 1;
        if($num == ''){
            $num == 1;
        }
        
        
        $int = intval($num);
        $decimal = fmod($num, 1);
        $decimal = round($decimal,3);
        
        $num = str_replace(".",",",$num);
        $decimal = str_replace(".",",",$decimal);
    ?>

    <h1>Resultados</h1>
    <p>O número inteiro é <?=$num?></p>
    <p>A parte fracionário é <?=$decimal?></p>
</body>
</html>