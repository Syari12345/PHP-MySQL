<?php
$host='localhost';
$user='root';
$pass="";
$database="ora_fundit";

try{
    $conn=new PDO("mysql:host=$host",$user,$pass); //krijon lidhje te php me databaze

    $sql="CREATE DATABASE ora_fundit"; //string qe permban kod te sql
    $conn->exec($sql); //ekzekuton pjesen(query-n) e sql

}catch(Exception $e){
    echo "Not connected" .$e.getMessage();
}

?>