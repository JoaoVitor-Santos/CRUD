<?php

  session_start();

  include_once("connection.php");
  include_once("url.php");

  $data = $_POST;


  if(!empty($data)){
    if($data['type'] === 'create'){

      $name = $data['name'];
      $hours = $data['hours'];
      
      $stmt = $conn->prepare("INSERT INTO hours(name, hours) VALUES (:name, :hours)");

       
      $stmt->bindParam(":name", $name);
      $stmt->bindParam(":hours", $hours);
     
      $stmt->execute();

    }elseif(($data['type'] === 'edit')){

     $name = $data['name'];
     $id = $data['id'];
      
     $stmt = $conn->prepare("UPDATE hours SET name = :name WHERE id = :id");

     $stmt->bindParam(":name", $name);
     $stmt->bindParam(":id", $id);

     $stmt->execute();

    }elseif(($data['type'] === 'delete')){

      $id = $data["id"];

      $query = "DELETE FROM hours WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":id", $id);

      $stmt->execute();

 
     }

    //Volta para a HOME
    header("Location:". $BASE_URL . "../home.php" );

  } else{

    //Puxa o id do funcionário selecionado ao clicar na lista
 $id;
 
 if(!empty($_GET)){
   $id = $_GET["id"];
 }

 //Retorna o dado de um funcionário, nas outras páginas
 if(!empty($id)){

   $query = "SELECT * FROM hours WHERE id = :id";

   $stmt = $conn->prepare($query);

   $stmt->bindParam(":id", $id);

   $stmt->execute();

   $employ = $stmt->fetch();

 } else {

   //Aqui insere todos os dados do banco de dados no array $employees
   $query = "SELECT * FROM hours";

   $stmt = $conn->prepare($query);

   $stmt->execute();

   $employees = $stmt->fetchAll();  

 }

 }
  