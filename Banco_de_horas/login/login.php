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


      //Aqui começa a session(login)
      if($quant === 1){

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        

        if(!isset($_SESSION)){
            session_start();
        }   



      //Coleta os dados do usuário no banco
      $stmt = $conn->prepare("SELECT * FROM employees WHERE cpf = :cpf");
      $stmt->bindParam(":cpf", $cpf);
      $stmt->execute();        
      $employ = $stmt->fetch();
      $_SESSION['cpf'] = $employ['cpf'];
      $_SESSION['employ'] = $employ['employ'];
      $_SESSION['name'] = $employ['name'];
      $_SESSION['datestart'] = $employ['datestart'];
      $_SESSION['wage'] = $employ['wage'];
      $_SESSION['hours'] = $employ['hours'];
      $_SESSION['phone'] = $employ['phone'];


       //Volta para a HOME
     header("Location:". $BASE_URL . "./home.php" );


      }else{
        echo "Erro nos dados!";
      }

  } else{
    echo "Preencha corretamente os dados";
  } 