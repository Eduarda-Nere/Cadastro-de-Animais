<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="UTF-8">
<link rel = "shortcut icon" type = "imagem/x-icon" href = "img\icone.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
}

</style>
</head>
<body>

<?php include("menu.php"); ?>


	<div class="container">
        <div class="container border py-3 my-3">
            <h4><font color="teal" style="border-bottom: 2px solid yellow;">Olá seja bem-vindo(a)!</font></h4>
            <p>Só quem é apaixonado por seu animalzinho de estimação sabe que a relação de amor e cumplicidade que temos com eles é unico! Por essa razão, fizemos esse sistema de cadastro de pets para cuidarmos com maior atenção do seu bixinho.</p>
        </div>
    </div>

    <div class="container-lg my-3">
        <div id="myCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner" style="max-height: 300px; min-width: 200px">
                <div class="carousel-item active">
                    <img src="img\dog.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="img\cat.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="img\coelho.jpg" class="d-block w-100">
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>

 <div class="container"><br>
      <h4><font color= "teal" style="border-bottom: 2px solid yellow;">Lista de pets já cadastrados:</font></h4>
      <br>

	<?php
	
	include("conexaobd.php");
	
	try {
	
		
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sth = $dbh->prepare('SELECT * from animal');
		$sth->execute();
		$result = $sth->fetchAll(PDO::FETCH_ASSOC);
		
		// escrevendo cabeçalho a partir dos índices do vetor FETCH_ASSOC

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
		print "Error!: " . $e->getMessage() . "<br/><br><a href='index.php'>Voltar</a>";
		die();
	}

	
	?>
	</div> 
        
        <?php include("rodape.php"); ?>

    </body>
</html>


