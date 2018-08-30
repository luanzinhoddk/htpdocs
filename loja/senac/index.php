<?php
include(__DIR__ . "/../logado.php");

$home = "/revisao/loja/senac/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/all.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">  <!--MENU-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="http://localhost:8080/loja/senac/">SENAC</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item inactive">
        <a class="nav-link" href="http://localhost:8080/loja/produto/">Produtos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item inactive">
        <a class="nav-link" href="http://localhost:8080/loja/marca/">Marcas</a>
      </li>
      <li class="nav-item inactive">
        <a class="nav-link" href="http://localhost:8080/loja/sexo/">Sexos</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-danger my-2 my-sm-0" type="submit" 
      href="http://localhost:8080/loja/logout.php">Sair</a>
    </form>
  </div>
</nav> <!-- FIM MENU-->
    <div class="container">
        <p class="text-center text-uppercase font-italic">SEJA BEM VINDO AO SISTEMA SENAC</p>
        <img src="/../senac.png" alt="senac">
    </div>
</body>
</html>