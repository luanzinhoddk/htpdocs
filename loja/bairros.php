<?php 
    require_once(__DIR__. "/./classes/modelo/UnidadeFederativa.class.php");
    require_once(__DIR__. "/./classes/modelo/Bairro.class.php");
    require_once(__DIR__ . "/./classes/dao/BairroDao.class.php");

    $cid_id = $_GET['cid'];
    $cid = new Cidade();
    $cid->setId($cid_id);
    $dao = new BairroDao();
    $bairros = $dao->findByCidade($cidade);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cidades</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/all.css">
</head>
<body>
<label for="cidade">Bairros</label>
     <select class="form-control" name="bairro" id="bairro">
        <option value="0">--SELECIONE--</option>
        <?php foreach($bairros as $bairro): ?>
             <option value="<?=$bairro->getId();?>">
                 <?=$bairro->getNome();?>
            </option>
        <?php endforeach; ?>
     </select>
</body>
</html>