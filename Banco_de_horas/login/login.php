<?php

include_once("./config/connection.php");
include_once("./config/url.php");


//Se tiver nenhum dado, não entrará nesse if
  if(strlen($_POST['cpf']) != 0 && $_POST['password'] != 0){

    //caso entre, aqui será feita a conexão no banco
    $cpf = $_POST['cpf'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE cpf = :cpf and password = :password");

    $stmt->bindParam(":cpf", $cpf);
    $stmt->bindParam(":password", $password);

    
    try {

        $stmt->execute();
    
      } catch (\Throwable $e) {
        //erro na conexao
    
        $error = $e->getMessage();
        echo "Erro: $error";
        //O erro vai ser printado na tela, atraves do getMessage na variavel $e, que seria onde esta armazenado o erro
      }

      //Verifica se buscou uma linha do banco de dados
      $quant = $stmt->rowCount();
/*
      //Verifica se é administrador
      $stmt = $conn->prepare("SELECT * FROM employees WHERE cpf = :cpf");
      $stmt->bindParam(":cpf", $cpf);
      $stmt->execute();
  */    


      //Aqui começa a session(login)
      if($quant === 1){

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        

        if(!isset($_SESSION)){
            session_start();
        }   

        $_SESSION['user'] = $user['cpf'];

       //Volta para a HOME
     header("Location:". $BASE_URL . "./home.php" );
     echo "veio no lugar certo";


      }else{
        echo "Erro nos dados!";
      }

  } else{
    echo "Preencha corretamente os dados";
  } 