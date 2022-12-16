<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" sizes="196x196" href="img/favicon.png">
<title>Criar conta</title>
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
  <h3>Cria Conta</h3>
  <form action="conta_criar_action.php" method="post">
    <div class="form-group">
      <label for="login">Login:</label>
      <input type="text" class="form-control" id="login" placeholder="Escolha um login" name="login" required>
    </div><br>
    <div class="form-group">
      <label for="pwd">Senha:</label>
      <input type="password" class="form-control" id="senha" placeholder="Defina uma senha" name="senha" required>
    </div><br>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Informe seu e-mail" name="email">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
    <a href='index.php' class='btn btn-secondary btn-rounded' >Voltar</a>
  </form>

      
<br><br><br><br><br><br><br><br><br><br>
</div>

</body>
</html>