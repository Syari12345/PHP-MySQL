<?php
include_once("config.php");

if(isset($_POST['submit'])){
   $username=$_POST['username'];
    $password=$_POST['password'];
}

 if(empty($username)||
    empty($password)
 ){
    echo "Fill all fields!";
        header("refresh:2; url=login.php");
 }else{
      $sql="SELECT * FROM users WHERE username='$username'";
     $tempSql=$conn->prepare($sql);
      $tempSql->execute();

      if($tempSql)->rowCount()==0){
        echo "no user found with thid username";
         header("refresh:2; url=login.php");
      }else{
        $user=$tempSql->fetch();
        if(password_verify($password,$user['password'])){
             $_SESSION['id']=$user['id'];
              $_SESSION['emri']=$user['emri'];
               $_SESSION['username']=$user['username'];
                $_SESSION['email']=$user['email'];
                 $_SESSION['roli']=$user['roli'];
                   echo "Login succefully";
                  header("refresh:3; url=dashboard.php");
        }else{
            echo "Incorrect Password";
              header("refresh:2; url=login.php");
        }
      }
 }

 ?>
