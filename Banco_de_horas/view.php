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
        <label for="name"><strong>ID:</strong></label>
        <p><?= $employ['id'] ?></p>
      </div>
      <div id="view-group">
        <label for="name"><strong>Horas trabalhadas:</strong></label>
        <p><?= $employ['hours'] ?></p>
      </div>
  </div>
  



<?php

  include_once('templates/footer.php');

?>