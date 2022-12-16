<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" sizes="196x196" href="img/favicon.png">

  <title>Login</title>
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
  <div class="container border py-3 my-3">
    <h4><font color="teal" style="border-bottom: 2px solid yellow;">Minha Conta</font></h4>
    <p>Novo por aqui? Faça sua conta agora mesmo!</p> 
  </div>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-6">
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
          <button type="submit" class="btn btn-secondary">Entrar</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-6">
      <h4><font color="teal">Criar conta</font></h4>
      <p>Para ter acesso ao sistema, crie uma conta gratuita :)</p>
      <a href="conta_criar_form.php" class="btn btn-secondary">Criar Minha Conta</a></font>
      <br><br>
    </div>
  </div>
</div>

</body>
</html>