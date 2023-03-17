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

</head>
<body>
    <h1 id="main-tittle">Acesse seu pontuário</h1>
    <form action="" method = "POST" id="create-form">

        <div class="form-group">
            <label for="">CPF</label>
            <input type="text" name="cpf">
        </div>
        <div class="form-group">
            <label for="">Senha</label>
            <input type="password" name="password">
        </div>
        
        <button type="submit" id="btn-create" class="btn btn-primary">Entrar</button>
        
    </form>
    
</body>
</html>