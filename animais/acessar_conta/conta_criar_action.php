<?php session_start(); ?>
<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" sizes="196x196" href="img/favicon.png">
<title>Adicionar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body class="bg-light">

<?php include("menu_offline.php"); ?>

<div class="container">

	<?php

    if(isset($_POST)) {

        try {
            include("banco_dados_conexao.php");
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $dbh->prepare("insert into usuario (login,senha,email) values (?,?,?);");
            $stmt->bindParam(1, $login);
            $stmt->bindParam(2, $senha);
            $stmt->bindParam(3, $email);
            $login=$_POST["login"];
            $senha=$_POST["senha"];
            $email=$_POST["email"];
            if($stmt->execute()) {
                ?>
                <br>
                <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Usuário adicionado com sucesso!</h4>
                <hr>
                <a href="conta_entrar_form.php" class="btn btn-primary btn-rounded" >Entrar</a>	
                </div>
                <?php
            }
        } catch (PDOException $e) {
            $message = $e->getMessage();
            $voltar = "index.php";
            echo "<br>";
            echo "<div class='alert alert-danger' role='alert'>";
            echo "<h4 class='alert-heading'>";
            echo $message;
            echo "</h4>";
            echo "<hr>";
            echo "<a href='$voltar' class='btn btn-secondary btn-rounded' >";
            echo "Voltar";
            echo "</a>";
            echo "</div>";
            die();
        }

    }
    
    ?>

    
<br><br><br><br><br><br><br><br><br><br>
</div>

</body>
</html>