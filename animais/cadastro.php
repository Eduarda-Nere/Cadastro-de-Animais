<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel = "shortcut icon" type = "imagem/x-icon" href = "img\icone.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .botao input[type="submit"] {
        background-color: PowderBlue;
        color: black;
        border-radius: 5px;
        border: 0px solid #333;
        height: 40px;
        width: 95px;
    }

    .navbar{margin-bottom: 1rem;}
</style>
<body>
<?php include("menu.php"); ?><br>

<div class="container">
      <h4><font color= "teal" style="border-bottom: 2px solid yellow;">Cadastro</font></h4>
       <form method="post" action="insert.php"><br>
        <label for="tipo">Tipo:</label>
            <select class="form-select" name="tipo" required>
            <option value="">Selecione</option>
            <option value="Cachorro">Cachorro</option>
            <option value="Gato">Gato</option>
            <option value="Ave">Ave</option>
            <option value="Reptil">Réptil</option>
            <option value="Aquatico">Aquático</option>
            <option value="Outro">Outro</option>
        </select><br>

    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" required><br>
    </div>

    <div class="form-group">
        <label for="raca">Raça:</label>
        <input type="text" class="form-control" id="raca" name="raca" required><br>
    </div>

    <div class="form-group">
        <label for="sexo">Sexo:</label>
        <select class="form-select" name="sexo" required>
        <option value="">Selecione</option>
        <option value="M">Macho</option>
        <option value="F">Fêmea</option>
        </select><br>
    </div>

        <div class="botao">
            <input type="submit" class="btn btn-success" value="Cadastrar">
            <a href="index.php" class="btn btn-secondary">Voltar</a>
        </div>

            </form>
        </div>
        
        <?php include("rodape.php"); ?>

    </body>
</html>