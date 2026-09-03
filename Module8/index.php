<?php

$host='localhost';
$user="root";
$password="";
$db_name="testdb";

try{
     $conn=new PDO("mysql:host=$host;dbname=$db_name",$user,$password);
    // $sql="Create dataBase testdb";// -- na nevojitet vetem njeher kur e krijojm databazen e re
    //$sql="CREATE TABLE users (id int(6) not null AUTO_INCREMENT  PRIMARY KEY,
    //username varchar(30) not null,
   // password varchar(30) not null,
   // age int(30))";//

   $sql="INSERT INTO users (username,password,age) VALUES ('Syari.Aliu','Genius12345!',16);";
     $conn->exec($sql);
     echo "New row is inserted succsefully!";
}catch(Exception $e){
    echo "Something went wrong!";
}


?>