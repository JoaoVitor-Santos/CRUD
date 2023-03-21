<?php

  session_start();

  include_once("connection.php");
  include_once("url.php");

  $data = $_POST;


  //ADMINISTRADOR
if($_SESSION["employ"] === "administrador"){

  //ADICIONAR FUNCIONÁRIO
  if(!empty($data)){
    if($data['type'] === 'create' && $_SESSION['employ'] === "administrador"){

      $name = $data['name'];
      $hours = $data['hours'];
      $cpf = $data['cpf'];
      $employ= $data['employ'];
      $phone = $data['phone'];
      $wage = $data['wage'];
      $datestart = $data['datestart'];
      $password = $data['password'];
      
      $stmt = $conn->prepare("INSERT INTO employees(name, hours, cpf, employ, datestart, wage, phone) VALUES (:name, :hours, :cpf, :employ, :datestart, :wage, :phone)");

       
      $stmt->bindParam(":name", $name);
      $stmt->bindParam(":hours", $hours);
      $stmt->bindParam(":employ", $employ);
      $stmt->bindParam(":wage", $wage);
      $stmt->bindParam(":cpf", $cpf);
      $stmt->bindParam(":phone", $phone);
      $stmt->bindParam(":datestart", $datestart);
     
      $stmt->execute();

      //dados login
      $stmt = $conn->prepare("INSERT INTO users(cpf, password) VALUES (:cpf, :password)");

       
      $stmt->bindParam(":password", $password);
      $stmt->bindParam(":cpf", $cpf);
     
      $stmt->execute();

      //Editar funcionário
    }elseif(($data['type'] === 'edit')){

     $name = $data['name'];
     $cpf = $data['cpf'];
      
     $stmt = $conn->prepare("UPDATE employees SET name = :name WHERE cpf = :cpf");

     $stmt->bindParam(":name", $name);
     $stmt->bindParam(":cpf", $cpf);

     $stmt->execute();

     //Deletar funcionário
    }elseif(($data['type'] === 'delete' && $_SESSION['employ'] === "administrador")){

      $cpf = $data["cpf"];

      $query = "DELETE FROM employees WHERE cpf = :cpf";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":cpf", $cpf);

      $stmt->execute();

 
     }

    //Volta para a HOME
    header("Location:". $BASE_URL . "../home.php" );

  } else{

    //Puxa o id do funcionário selecionado ao clicar na lista
 $cpf;
 
 if(!empty($_GET)){
   $cpf = $_GET["cpf"];
 }

 //Retorna o dado de um funcionário, nas outras páginas
 if(!empty($cpf)){

   $query = "SELECT * FROM employees WHERE cpf = :cpf";

   $stmt = $conn->prepare($query);

   $stmt->bindParam(":cpf", $cpf);

   $stmt->execute();

   $employ = $stmt->fetch();

 } else {

   //Aqui insere todos os dados do banco de dados no array $employees
   $query = "SELECT * FROM employees";

   $stmt = $conn->prepare($query);

   $stmt->execute();

   $employees = $stmt->fetchAll();  

 }

 }

 //Funcionários
} else{

  $cpf = $_SESSION["cpf"];

  $query = "SELECT * FROM employees WHERE cpf = :cpf";

   $stmt = $conn->prepare($query);

   $stmt->bindParam(":cpf", $cpf);

   $stmt->execute();

   $employ = $stmt->fetch();

   //Editar os próprios dados
   if(!empty($data)){
   if(($data['type'] === 'edit')){

     $name = $data['name'];
     $phone = $data['phone'];
      
     $stmt = $conn->prepare("UPDATE employees SET name = :name, phone = :phone WHERE cpf = :cpf");

     $stmt->bindParam(":name", $name);
     $stmt->bindParam(":cpf", $cpf);
     $stmt->bindParam(":phone", $phone);

     $stmt->execute();

     header("Location:". $BASE_URL . "../home.php" );
   }
  }
}
  