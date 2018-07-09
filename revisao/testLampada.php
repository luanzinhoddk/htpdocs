<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lâmpada</title>
    <style>
        div {
            text-align: center;
        }
        button {
            width: 90px;
        }
    </style>
</head>
<body>
    <div>
        <?php 
        $lampada = 'img/desligada.jpg';
        if (!empty($_POST['ligar']) && $_POST['ligar']=='ligada') {
            $lampada = 'img/ligada.jpg';
        }
        ?>
        <img src="<?php echo $lampada?>">
        <form  method="post">
            <button type="submit" name="ligar" value="ligada">
                Ligar
            </button>
            <button type="submit" name="desligar" value="desligada">
                Desligar
            </button>
        </form>
    </div>
</body>
</html>