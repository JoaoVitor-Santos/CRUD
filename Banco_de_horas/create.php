<?php

  include_once('templates/header.php');

?>

  <h1 id="main-tittle">Funcionários</h1>

  <form action="<?= $BASE_URL ?>/config/process.php" method="POST" id="create-form">
   <input type="hidden" name="hours" value="0">
   <input type="hidden" name="type" value="create">
  <div class="form-group">
    <label for="name">Nome do Funcionário:</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
  </div>
  <button type="submit" id="btn-create" class="btn btn-primary">Cadastrar</button>
  </form>


<?php

  include_once('templates/footer.php');

?>