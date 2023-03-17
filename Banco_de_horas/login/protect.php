<?php

  if(!isset($_SESSION)){
      session_start();
  }

  if(!isset($_SESSION['user'])){
    die("Você não pode acessar esta página porque não esta logado.<p><a href = \"index.php\">Entrar</a> </p>");
  }

?>