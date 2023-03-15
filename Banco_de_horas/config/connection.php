<?php

  $host = "localhost";
  $dbname = "timebank";
  $user = "root";
  $pass = "";

  try {
    //Aqui é onde a conexao é executada
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    //Ativa o modo de erros, no catch
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch (\Throwable $e) {
    //erro na conexao

    $error = $e->getMessage();
    echo "Erro: $error";
    //O erro vai ser printado na tela, atraves do getMessage na variavel $e, que seria onde esta armazenado o erro
  }