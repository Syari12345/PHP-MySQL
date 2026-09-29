<?php
include("config.php");

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $residence=$_POST['residence'];

    if(empty($name)||
    empty($lastname)||
    empty($email)||
    empty($residence)){
        echo "You need to fill all data";
    }else{
        $sql="SELECT * FROM students where email='$email' OR residence='$residence'";

        $tempSQL=$conn->prepare($sql);
        $tempSQL->execute();

        if($tempSQL->rowCount()>0){
        echo "This username or email already exists!";
        header("refresh:2; url=signup.php");  
    }
     else{
        $sql="INSERT INTO students(name,lastname,residence,email,) VALUES ('$name','$lastname','residence','$email')";

        $insertSql=$conn->prepare($sql);
        $insertSql->execute();

        echo "New user is created successfully!";
        header("refresh:2; url=login.php");
      }
        }
    }
?>