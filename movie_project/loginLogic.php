<?php
    include_once("config.php");

     if(isset($_POST['submit'])){
        //1. I marrim te dhenat prej input formes
        $username=$_POST['username'];
        $password=$_POST['password'];
     }

    //2. Bojme check per empty values
        if(empty($username)||
            empty($password)
        ){
            echo "Fill all fields!";
            header("refresh:2; url=login.php");
        }else{
            //3. Check if user exists
            $sql="SELECT * FROM users WHERE username='$username'";
            $tempSql=$conn->prepare($sql);
            $tempSql->execute();

            if($tempSql->rowCount()==0){
                echo "No user found with this username";
                header("refresh:2; url=login.php");
            }else{
                $user=$tempSql->fetch();
                //4. Check per password valid
                if(password_verify($password,$user['password'])){
                    $_SESSION['id']=$user['id'];
                    $_SESSION['emri']=$user['emri'];
                    $_SESSION['username']=$user['username'];
                    $_SESSION['email']=$user['email'];
                    $_SESSION['roli']=$user['roli'];
                    echo "Login successfully!";
                    echo "<script>localStorage.setItem('user'," .json_encode($user) . ");</script>";
                    header("refresh:3; url=dashboard.php");

                }else{
                    echo "Incorrect password";
                    header("refresh:2; url=login.php");
                }
            }
        }

?>



