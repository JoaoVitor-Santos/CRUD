<?php

  include_once('templates/header.php');
  

?>

  <h1 id="main-tittle">Funcionários</h1>

  <?php if(count($employees) > 0): ?>

    <table class="table" id="employ-table">
      <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Horas trabalhadas</th>
        <th scope="col"></th>
      </tr>
      </thead>
      <tbody>
        <?php foreach ($employees as $employ): ?>
          <tr>
            <td scope="row" class="col-id"><?= $employ["cpf"]?></td>
            <td scope="row"><?= $employ["name"]?></td>
            <td scope="row"><?= $employ["hours"]?></td>
            <td class="actions">
              <a href="<?= $BASE_URL ?>/view.php?cpf=<?= $employ["cpf"]?>"><i class="fas fa-eye check-icon"></i></a>
              <a href="<?= $BASE_URL ?>/edit.php?cpf=<?= $employ["cpf"]?>"><i class="far fa-edit edit-icon"></i></a>  
              <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
              <input type="hidden" name="type" value="delete">
              <input type="hidden" name="cpf" value="<?= $employ["cpf"]?>">
              <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
              </form>
                 
            </td>
          </tr>
        <?php endforeach;  ?>  
      </tbody>
    </table>
  

  <?php else: ?>
    <p>Ainda não há funcionários, <a href="<?= $BASE_URL ?>/create.php">clique aqui para adicionar</a></p>
  <?php endif; ?>  

  


<?php


  include_once('templates/footer.php');

?>