<?php
session_start();
	
	include("banco_dados_conexao.php");

	try {

		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $dbh->prepare("select * from usuario where login=? and senha=?");
    $stmt->bindParam(1, $login);
    $stmt->bindParam(2, $senha);
    $login = $_POST["login"];
    $senha = $_POST["senha"];
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(!empty($result)){
      $_SESSION["login"] = $result[0]["login"];
      header("Location: painel.php");
    } else {

      ?>
      <!DOCTYPE html>
      <html lang="en">
      <head>
      <link rel="shortcut icon" sizes="196x196" href="img/favicon.png">
      <title>AnotaMOB</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" type="text/css" href="custom.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
      </head>
      <body class="bg-light">
      <?php include("menu_offline.php"); ?>
      <div class="container">
      <br>
      <div class='alert alert-danger' role='alert'>
      <h4 class='alert-heading'>
      Usuário ou senha inválidos.
      </h4>
      <hr>
      <a href='index.php' class='btn btn-secondary btn-rounded' >Voltar</a>
      </div>   
      <br><br><br><br><br><br><br><br><br><br>
      </div>
      </body>
      </html>
      <?php
    }
		
		$dbh = null;
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/><br><a href='index.php'>voltar</a>";
		die();
	}

	?>
