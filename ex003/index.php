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
        $vet = [4, 'ai', 7.2, true];
        var_dump($vet);

        class Pessoa {
            
            private string $pessoa;
        }
        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>