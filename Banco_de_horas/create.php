<?php

  include_once('templates/header.php');

?>

  <h1 id="main-tittle">Funcionários</h1>

  <form action="<?= $BASE_URL ?>/config/process.php" method="POST" id="create-form">
   <input type="hidden" name="hours" value="0">
   <input type="hidden" name="datestart" value="<?= date('d/m/y') ?>">
   <input type="hidden" name="type" value="create">
  <div class="form-group">
    <label for="name">CPF do Funcionário:</label>
    <input type="text" class="form-control" id="name" name="cpf" placeholder="Digite o CPF" required>
  </div>
  <div class="form-group">
    <label for="name">Nome:</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
  </div>
  <div class="form-group">
    <label for="name">Telefone:</label>
    <input type="text" class="form-control" id="name" name="phone" placeholder="Digite o telefone" required>
  </div>
  <div class="form-group">
    <label for="name">cargo:</label>
    <input type="text" class="form-control" id="name" name="employ" placeholder="Digite o cargo" required>
  </div>
  <div class="form-group">
    <label for="name">salário:</label>
    <input type="text" class="form-control" id="name" name="wage" placeholder="Digite o salário" required>
  </div>
  <div class="form-group">
    <label for="name">senha de login:</label>
    <input type="text" class="form-control" id="name" name="password" placeholder="Digite o salário" required>
  </div>
  <button type="submit" id="btn-create" class="btn btn-primary">Cadastrar</button>
  </form>


<?php

  include_once('templates/footer.php');

?>