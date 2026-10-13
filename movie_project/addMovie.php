<?php 
include_once('config.php');

if(isset($_POST['submit'])){
   $movie_name=$_POST['movie_name'];
   $genre=$_POST['genre'];
   $release_year=$_POST['release_year'];
   $rating=$_POST['rating'];
}

if(empty($movie_name)||empty($genre)||empty($release_year)){
     echo "Fill all fields!";
        header("refresh:2; url=login.php");
}

  $sql="INSERT INTO movies(emri_filmit,vili_publikimit,vleresimi,zhanri) VALUES (' $movie_name',' $genre','$release_year','$rating')";
  $insertMovie=$conn->prepare($sql);

  $insertMovie->execute();
  header("Location: home.php");
 

?>