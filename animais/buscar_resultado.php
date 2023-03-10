<!DOCTYPE html>
<html lang="en">
<head>
<title>Resultado</title>
<meta charset="utf-8">
<link rel = "shortcut icon" type = "imagem/x-icon" href = "img\icone.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


<style>
	/* Custom style */
    .navbar{
        margin-bottom: 1rem;
    }
	body {
    	padding-bottom: 50px;
	}


</style>
</head>
<body>

<?php include("menu.php"); ?>


<div class="container">
	<h4>Resultado da Busca</h4>
	<?php
	
	include("conexaobd.php");	
	
	try {
	
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $dbh->prepare('SELECT * from animal WHERE nome = ?');
		$stmt->bindParam(1, $nome);
		$nome = $_POST["nome"];
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);


		echo '<div class="table-responsive"> ';
   		echo '<table class="table">';
		echo "<thead>";
		echo "<tr>";
        
        foreach($result[0] as $index=>$values) {
			echo "<th>$index</th>";
		}
		echo "<th></th>";
		echo "</tr>";
		echo "</thead>";
		echo "<tbody>";

		// escrevendo resultado do SELECT
		foreach($result as $row) {
			echo "<tr>";
			foreach($row as $value){
				echo "<td>$value</td>";
			}
			echo "<td>";
			echo "<a href='excluir.php?id=".$row["id"]."'>";
			echo '<i class="bi bi-x-square"></i>';
			echo "</a>";
			echo "&nbsp;&nbsp;&nbsp;";
			echo "<a href='alterar.php?id=".$row["id"]."'>";
			echo '<i class="bi bi-pencil"></i>';
			echo "</a>";
			echo "</td>";
			echo "</tr>";
		}

		echo '</tbody>';
		echo '</table>';
		echo '</div>';

		$dbh = null;
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