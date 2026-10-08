<?php
include_once("config.php");

if(isset($_POST['submit'])){
   $emri=$_POST['emri'];
   $username=$_POST['username'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $roli=$_POST['roli'];
 
    if(empty($emri)||
    empty($username)||
    empty($email)||
    empty($password)||
    empty($roli)
   
){
    echo "You have not filled all fields.";
}else{
     $sql="SELECT * FROM users WHERE username='$username' OR email='$email'";
     $tempSql=$conn->prepare($sql);
      $tempSql->execute();

          if($tempSQL->rowCount()>0){
        echo "This username or email already exists!";
        header("refresh:2; url=index.php");
        }else{
            $hashedPassword=password_hash($password,PASSWORD_BCRYPT);
            $query="INSERT INTO users(emri,username,email,password,roli) VALUES ('$emri','$username','$email','$hashedPassword','$roli')";
              
        $insertSql=$conn->prepare($query);
        $insertSql->execute();
        echo "New user created successfully, in 2 seconds please login!";
        header("refresh:2; url=login.php");

        }

}
}


?>