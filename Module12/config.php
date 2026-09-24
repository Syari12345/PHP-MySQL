<?php

$user="root";
$pass="";
$server="localhost";
$dbname="test";

try{
    $conn=new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);

} catch (Exception $e) {
    echo "Error:". $e->getMessage();
}


?>