<?php


 try{
     $conn = new PDO ( "sqlsrv:server = tcp:#####; Database = #####", "#####", "#####");
     $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
     $sql = "CREATE TABLE mbrAcct (firstname int IDENTITY(1,1) PRIMARY KEY, lastname varchar(45) DEFAULT NULL, email varchar(45) DEFAULT NULL, age int DEFAULT NULL, location varchar(45) DEFAULT NULL, created_at datetime DEFAULT NULL, updated_at datetime DEFAULT NULL)";
     $conn->query($sql);

 }
 catch(Exception $e){
     die(print_r($e));
 }
 echo "<h3>Table created.</h3>";
 ?>
