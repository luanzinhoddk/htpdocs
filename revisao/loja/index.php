<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sexos</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css"
</head>
<body>
    <div class="container" align>
        <div class="row">
            <div class="col-6"><!--form -->
                <fieldset>
                    <legend>Dados do Sexo</legend>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="sexo">Sexo</label>
                            <input type="text" class="form-controll" name="sexo" id="sexo" maxlength="12" required>
                        </div>
                </fieldset>
            </div>
            <div class="col-6"><!--table -->
                <fieldset>
                    <legend>Lista de Sexos</legend>
                    <div class="form-group">
                            <label for="sigla">Sigla</label>
                            <input type="text" class="form-controll" name="sigla" id="sigla" maxlength="1" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Salvar</button>
                        </div>
                   </form>
                </fieldset>
            </div>
        </div>
    </div>
    
</body>
</html>