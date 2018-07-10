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
        require_once 'Lampada.php';
        $lampada = new Lampada('img/desligada.jpg','img/ligada.jpg');
        if (isset($_POST['desligar'])) {
            $lampada->desliga();
        } else {
            $lampada->liga();
        }
        ?>
        <img src="<?=$lampada->getImagem()?>">
        <form  method="post">
            <button type="submit" name="ligar">
                Ligar
            </button>
            <button type="submit" name="desligar">
                Desligar
            </button>
        </form>
    </div>
</body>
</html>