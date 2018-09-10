<?php 
    require_once(__DIR__. "/./classes/modelo/UnidadeFederativa.class.php");
    require_once(__DIR__. "/./classes/modelo/Cidade.class.php");
    require_once(__DIR__ . "/./classes/dao/CidadeDao.class.php");

    $uf_id = $_GET['uf'];
    $uf = new UnidadeFederativa();
    $uf->setId($uf_id);
    $dao = new CidadeDao();
    $cidades = $dao->findByUnidadeFederativa($uf);
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
<label for="cidade">Cidade</label>
     <select class="form-control" name="cidade" id="cidade" onchange="show_bairros(this.value)">
        <option value="0">--SELECIONE--</option>
        <?php foreach($cidades as $cidade): ?>
             <option value="<?=$cidade->getId();?>">
                 <?=$cidade->getNome();?>
            </option>
        <?php endforeach; ?>
     </select>
</body>
</html>