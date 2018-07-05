<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
    $nome = 'Jurubeba';
    $idade = 18;

    echo "meu nome é $nome e tenho $idade anos";
    ?>

    <br>

    <?php 
    
    echo $idade > 18 ? '' : 'não ';
    echo 'é maior de idade';

    $voto = 2;

    switch ($voto){
        case 1:
            echo 'Tiririca';
            break;
        case 2:
            echo 'Dagô'
            break
        default: 'Você fez a melhor escolha!';
    }
    ?>

</body>
</html>