<?php

  include_once("login/login.php");
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS INCLUDE -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
</head>
<body>
    <h1 id="main-tittle">Acesse seu pontuário</h1>



    <form action="" method = "POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">CPF</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cpf">
    <div id="emailHelp" class="form-text">Digite seu cpf</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" class="btn btn-dark">entrar</button>
</form>
    
</body>
</html>