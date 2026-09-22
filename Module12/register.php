<?php
include("config.php");

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $hashed_password=password_hash($password,_PASSWORD_BCRYPT);

    if(empty($name)
    empty($surname)
    empty($username)
    empty($email)
    empty($password)){
        echo "You need to fill all data";
  
    }else{
        $sql="SELECT * FROM user_login where email='$email" CR username='$username'";

        $tempSQL=$conn->prepare($sql);
        $tempSQL->execute();

        if($tempSQL->rowCount()>0){
        
    }
    
  
}
?>