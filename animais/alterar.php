<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel = "shortcut icon" type = "imagem/x-icon" href = "img\icone.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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
</head>
<body>

<?php include("menu.php"); ?>

<div class="container">

    <?php
        include("conexaobd.php"); 
    ?>
<br>
    <h4><font color= "teal" style="border-bottom: 2px solid yellow;">Alterar dados</font></h4>
    <form method="post" action="update.php"><br>

    <?php
            try {

                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $dbh->prepare('SELECT id, tipo, nome, raca, sexo from animal where id = ?');
                $stmt->bindParam(1, $id);
                $id = $_GET["id"];
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $dbh = null;

                ?>

                <div class="form-group">
                <label for="id">Id:</label>
                <input type='text' id="id" name='id' class="form-control" value='<?php echo $result[0]["id"];?>' readonly>
                </div><br>

                <label for="tipo">Tipo:</label>
                <select class="form-select" name="tipo" value="<?php echo $result[0]["tipo"];?>" required>
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
        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $result[0]["nome"];?>" required>
        <br>
    </div>

    <div class="form-group">
        <label for="raca">Raça:</label>
        <input type="text" class="form-control" id="raca" name="raca" value="<?php echo $result[0]["raca"];?>" required>
        <br>
    </div>

    <div class="form-group">
        <label for="sexo">Sexo:</label>
        <select class="form-select" name="sexo" value="<?php echo $result[0]["sexo"];?>" required>
        <option value="">Selecione</option>
        <option value="M">Macho</option>
        <option value="F">Fêmea</option>
        </select><br>
    </div>

         <div class="botao">
            <input type="submit" class="btn btn-success" value="Alterar">
            <a href="index.php" class="btn btn-secondary">Voltar</a>
        </div><br><br>

        </form>
    </div>

    <?php

        } catch (PDOException $e) {
            print "Erro: Complete o formulário antes de alterar os dados!<br><br>" . $e->getMessage() . "<br/><br><a href='index.php' class='btn btn-secondary'>Voltar</a>";
            die();
        }
    ?>

    <?php include("rodape.php"); ?>

    </body>
</html>