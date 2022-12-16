<!DOCTYPE html>
<html lang="en">
<head>
<title>Buscar</title>
<meta charset="utf-8">
<link rel = "shortcut icon" type = "imagem/x-icon" href = "img\icone.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .botao input[type="submit"] {
        background-color: PowderBlue;
        color: black;
        border-radius: 5px;
        border: 0px solid #333;
        height: 40px;
        width: 95px;
    }

    </style>
</head>
<body>

<?php include("menu.php"); ?><br>

<div class="container">
	<h4><font color= "teal" style="border-bottom: 2px solid yellow;">Buscar nome</font></h4>
		<form method="post" action="buscar_resultado.php"><br>
		<div class="form-group">
			<label for="nome">Nome:</label>
			<input type="text" class="form-control" id="nome" name="nome" required>
	    </div><br>

	    <div class="botao">
            <input type="submit" class="btn btn-success" value="Buscar">
            <a href="index.php" class="btn btn-secondary">Voltar</a>
        </div>
	</form>

		</div>
		
		<?php include("rodape.php"); ?>

	</body>
</html>