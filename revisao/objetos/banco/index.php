<?php
require_once "classes/ContaCorrente.class.php";
require_once "classes/Cliente.class.php";
require_once "classes/BancoDB.class.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banco Cadastro</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-8">
        <form method="post" action="cadastrar-conta.php">       
            <fieldset>
            <legend>Dados do Cliente</legend>

            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" 
                maxlength="30" size="30" 
                required autofocus autocomplete="off"
                tabindex="1">
            <br />

            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf"
                maxlength="14" size="30" 
                required autofocus autocomplete="off"
                tabindex="1">
           
            <legend>Dados da Conta</legend>
            <label for="agencia">Agência:</label>
            <input type="text" class="form-control" id="agencia" name="agencia"                
            maxlength="4" size="6" 
            required autofocus autocomplete="off"
            tabindex="1">
            <br />

            <label for="conta">Conta:</label>
            <input type="text" class="form-control" id="conta" name="conta"            
            maxlength="6" size="6" 
            required autofocus autocomplete="off"
            tabindex="1">
            <br />

            <label for="saldo">Saldo:</label>
            <input type="text" class="form-control" id="saldo" name="saldo" />
            <br />
           
            </fieldset>
            </div>
            <div class="col-8">
            <button type="submit" class="btn btn-success col-4">Salvar</button>
            <button type="submit" class="btn btn-danger col-4">Limpar</button>
            </div>
           
    </form>
    <br> </br>
        <div class="col-9">
        <legend>Lista de Contas</legend>
                <table class="table table-striped table-hover">

                <?php
                    $banco = new BancoDB();
                    $contas = $banco->listaTodas();
                ?>
                    <tr>
                        <th>Agência</th>
                        <th>Conta</th>
                        <th>Cliente</th>
                        <th>CPF</th>
                        <TH>Saldo</TH>
                    </tr>
                    <?php foreach ($contas as $conta) {?>
                        <tr>
                            <td><?=$conta->getAgencia();?></td>
                            <td><?=$conta->getNumero();?></td>
                            <td><?=$conta->getCliente()->getNome();?></td>
                            <td><?=$conta->getCliente()->getCpf();?></td>
                            <td><?=$conta->getSaldo();?></td>
                            <td>
                                <form method="post" action="editar-conta.php">
                                    <input type="hidden" name="conta" value="<?=$conta->getNumero();?>">
                                         <button type="submit" class="btn btn-primary col">
                                            <i class="far fa-edit"></i>
                                        </button>
                                </form>
                            </td>
                            <td>
                            <form method="post" action="excluir-conta.php">
                                <input type="hidden" name="conta" value="<?=$conta->getNumero();?>">
                                    <button type="submit" class="btn btn-danger col">
                                    <i class="far fa-trash-alt"></i>
                                     </button>
                            </form>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
        </div>
    </div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>