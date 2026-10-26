<?php

     $u="root";
     $pass="";
     $server="localhost";
     $dbname="raveling_project";

     try{
        $conn=new PDO("mysql:host=$server;dbname=$dbname",$u,$pass);

     } catch (Exception $e) {
        echo "Error:". $e->getMessage();
     }
$u="root";
$pass="";
$server="localhost";
$dbname="raveling_project";

//removed the 't'//

try{
    $conn=new PDO("mysql:host=$server;dbname=$dbname",$u,$pass);

} catch (Exception $e) {
    echo "Error:". $e->getMessage();
}




?>