<?php
session_start();
$mensagem = "";
if(isset($_SESSION['mensagem'])) {
  $mensagem = $_SESSION['messagem'];
  session_destroy();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENAC</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/all.css">
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="http://localhost:8080/revisao/loja/index.php">SENAC</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost:8080/revisao/loja/produto">Produto <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost:8080/revisao/loja/marca">Marca</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link disabled" href="http://localhost:8080/revisao/loja/sexo">Sexo</a>
      </li>
    </ul>
  </div>
</nav>
</div>
<body>
    <div class="container">
        <div class="row">
            <?=$mensagem;?>
        </div>
        <div class="row">
            <div class="col-12">
                <fieldset>
                    <legend>Login na Loja</legend>
                    <form action="valida.php" method="post">
                        <div class="form-group">
                            <label for="login">Login</label>
                            <input type="text" class="form-control" name="login" id="login">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" name="entrar" value="entrar">
                                <i class="fas fa-save"></i> Entrar
                            </button>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
</body>
</html>
