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
        $num = $_POST['numero'] ?? 1;
        $sucessor = $num + 1;
        $antecessor = $num - 1;
    ?>

    <h1>Resultado</h1>
    <p>O número digitad foi <?=$num?></p>
    <p>Seu sucessor é <?=$sucessor?></p>
    <p>Seu antecessor é <?=$antecessor?></p>
</body>
</html>