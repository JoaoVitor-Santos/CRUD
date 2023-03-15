<?php

  include_once('templates/header.php');

?>

  <h1 id="main-tittle">Funcionários</h1>

  <form action="<?= $BASE_URL ?>/config/process.php" method="POST" id="create-form">
   <input type="hidden" name="id" value="<?= $employ['id'] ?>">
   <input type="hidden" name="type" value="edit">
  <div class="form-group">
    <label for="name">Nome do Funcionário:</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="<?= $employ['name'] ?>" required>
  </div>
  <button type="submit" id="btn-create" class="btn btn-primary">Atualizar</button>
  </form>


<?php

  include_once('templates/footer.php');

?>