<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" sizes="196x196" href="img/favicon.png">
<title>Entrar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="custom.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body class="bg-light">

<?php include("menu_offline.php"); ?>

<br>
<div class="container">
<h4><font color="teal">Entrar</font></h4>
  <form action="conta_entrar_action.php" method="post">
    <div class="form-group">
      <label for="login">Login:</label>
      <input type="text" class="form-control" id="login" placeholder="Informe seu login" name="login" required>
    </div><br>
    <div class="form-group">
      <label for="pwd">Senha:</label>
      <input type="password" class="form-control" id="senha" placeholder="Informe sua senha" name="senha" required>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Entrar</button>
    <a href='index.php' class='btn btn-secondary btn-rounded' >Voltar</a>
  </form>

  
      
<br><br><br><br><br><br><br><br><br><br>
</div>

</body>
</html>