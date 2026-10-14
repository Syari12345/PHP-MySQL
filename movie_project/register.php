<?php
<<<<<<< HEAD
    include_once("config.php");

    if(isset($_POST['submit'])){
        //1. I marrim te dhenat prej input formes
        $emri=$_POST['emri'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $roli=$_POST['roli'];

        //2. Bojme check per empty values
        if(empty($emri)||
            empty($username)||
            empty($email)||
            empty($password)||
            empty($roli)
        ){
            echo "You have not filled in all the fields.";
            header("refresh:2; url=index.php");
        }else{
            //3. Check if user exists
            $sql="SELECT * FROM users WHERE username='$username' OR email='$email'";
            $tempSql=$conn->prepare($sql);
            $tempSql->execute();
            
            if($tempSql->rowCount()>0){
                echo "User with email/username already exists!";
                header("refresh:2; url=index.php");
            }else{
                //4. Insert new user into database
                $hashedPassword=password_hash($password,PASSWORD_BCRYPT);
                $query="INSERT INTO users(emri,username,email,password,roli) VALUES ('$emri','$username','$email','$hashedPassword','$roli')";
                $insertSql=$conn->prepare($query);
                $insertSql->execute();
                echo "New user created successfully, in 2 seconds please login!";
                header("refresh:2; url=login.php");
            }
        }

    }
=======
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
>>>>>>> a4d08df2028dcfdb713be86a0b08ad414a1c14aa


?>