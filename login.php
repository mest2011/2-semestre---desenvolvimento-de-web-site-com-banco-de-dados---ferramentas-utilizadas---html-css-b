<?php include "cabecalho.php"; ?>

<form action="/action_page.php" method="post" style="margin-top: 50px; margin-left: 50px;">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email"name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd"name="senha">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Manter Logado</label>
  </div>
  <button type="submit" class="btn btn-default">Entrar</button>
</form>

<?php include "rodape.php"; ?>
