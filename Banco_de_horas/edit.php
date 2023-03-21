<?php

  include_once('templates/header.php');

?>

  <h1 id="main-tittle">Funcionários</h1>

  <form action="<?= $BASE_URL ?>/config/process.php" method="POST" id="create-form">
   <input type="hidden" name="id" value="<?= $employ['cpf'] ?>">
   <input type="hidden" name="type" value="edit">
  <div class="form-group">
    <label for="name">Nome do Funcionário:</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="<?= $employ['name'] ?>" required>
  </div>
  <div class="form-group">
    <label for="name"> Novo telefone:</label>
    <input type="text" class="form-control" id="phone" name="phone" placeholder="<?= $employ['phone'] ?>" required>
  </div>
  <button type="submit" id="btn-create" class="btn btn-dark">Atualizar</button>
  </form>


<?php

  include_once('templates/footer.php');

?>