<!DOCTYPE html>
<html lang="en">
<head>
<title>Excluir</title>
<meta charset="utf-8">
<link rel = "shortcut icon" type = "imagem/x-icon" href = "img\icone.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php include("menu.php"); ?>

<div class="container">

<?php
    include("conexaobd.php");
    
    try {
    
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $dbh->prepare("delete from animal where id = ?;");
        $stmt->bindParam(1, $id);

        $id = $_GET["id"];

        if($stmt->execute())
        echo "
        <br>
        <div class='alert alert-success' role='alert'>
        Excluído com sucesso!
        </div>
        ";

    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/><br><a href='index.php'>voltar</a>";
        die();
    }
?>

        <br><a href="index.php" class="btn btn-secondary">Voltar</a>
        </div>
        
        <?php include("rodape.php"); ?>

    </body>
</html>