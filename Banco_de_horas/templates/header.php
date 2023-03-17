<?php

  include_once("config/url.php"); 
  include_once("config/process.php");
  include_once("config/connection.php");

  //limpa a mensagem
  if(isset($_SESSION['msg'])){
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contatos</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS INCLUDE -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
</head>
<body>
    <!-- cabeçario -->
    <header>
        <!-- barra de navegação -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="<?= $BASE_URL ?>/home.php" class = "navbar-brand">
                <img src="<?= $BASE_URL ?>img/logo.jpg" alt="agenda">
            </a>
            
            <div class="navbar-nav">
                <a class="nav-link" id = "home-link" href="<?= $BASE_URL ?>/home.php">Funcionários</a>
                <a class="nav-link" id = "home-link" href="<?= $BASE_URL ?>/create.php">Adicionar funcionário</a>
            </div>
            
        </nav>
    </header>