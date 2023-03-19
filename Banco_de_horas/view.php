<?php

  include_once('templates/header.php');

?>


  <h1 id="main-tittle">Informações do funcionário</h1>
  <div id = "view">
      <div id="view-group">
        <label for="name"><strong>Nome do Funcionário:</strong></label>
        <p><?= $employ['name'] ?></p>
      </div>
      <div id="view-group">
        <label for="name"><strong>CPF:</strong></label>
        <p><?= $employ['cpf'] ?></p>
      </div>
      <div id="view-group">
        <label for="name"><strong>Telefone:</strong></label>
        <p><?= $employ['phone'] ?></p>
      </div>
      <div id="view-group">
        <label for="name"><strong>Horas trabalhadas:</strong></label>
        <p><?= $employ['hours'] ?></p>
      </div>
      <div id="view-group">
        <label for="name"><strong>cargo:</strong></label>
        <p><?= $employ['employ'] ?></p>
      </div>
      <div id="view-group">
        <label for="name"><strong>Salário:</strong></label>
        <p><?= $employ['wage'] ?></p>
      </div>
  </div>
  



<?php

  include_once('templates/footer.php');

?>