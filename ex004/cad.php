<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    $nome = $_POST['nome'] ?? "";
    $sobrenome = $_POST['sobrenome'] ?? "";
?>
<body>
    <h1>Olá!</h1>
    <p>Seja vem vindo, <?php echo "$nome $sobrenome" ?></p>
    <?=var_dump($_POST)?>
</body>
</html>