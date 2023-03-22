<?php

  include_once('templates/header.php');
  

?>
<?php if($_SESSION['employ'] === "administrador"): ?>

  <h1 id="main-tittle">Funcionários</h1>

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
  <h1 id="main-tittle">Suas informações</h1>
  <!--Funcionários -->
  <table class="table" id="employ-table">
      <thead>
      <tr>
        <th scope="col">cpf</th>
        <th scope="col">Nome</th>
        <th scope="col">Horas trabalhadas</th>
        <th scope="col"></th>
      </tr>
      </thead>
      <tbody>
          <tr>
            <td scope="row" class="col-id"><?= $employ["cpf"]?></td>
            <td scope="row"><?= $employ["name"]?></td>
            <td scope="row"><?= $employ["hours"]?></td>
          </tr>
      </tbody>
    </table>

    <!-- Botão do pontuário -->
    <div id="button-pont">
    <form class="hours-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
    <input type="hidden" name="type" value="hours">
    <input type="hidden" name="type" value="hours">
    <button type="submit" class="btn btn-dark" id="button-hours" name="btn-hours"><?php if($_SESSION['contador'] === 1) :?>Encerrar expediente <?php else: ?>Começar o expediente<?php endif; ?></button>
    </form>
    </div>
<?php endif; ?> 

  


<?php

  include_once('templates/footer.php');

?>