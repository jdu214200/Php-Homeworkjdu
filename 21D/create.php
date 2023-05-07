<?php
    $name = $_POST['name'];
    $password = $_POST['password'];

     $users = json_decode(file_get_contents("db.json"), true);

     $newUser = [
        "id" => 5,
        "name" => $name,
        "password" => $password
     ];
   
     $users[] = $newUser;

     file_put_contents("db.json", json_encode($users));

     header("Location; read.php");
    

    ?>
    
