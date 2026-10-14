<?php
include_once("config.php");

if(isset($_POST['submit'])){
   $movie_id=$_POST['movie_id'];
   $notickets=$_POST['notickets'];
   $data=$_POST['data'];
   $seat=$_POST['seat'];
   $time=$_POST['time'];
   $user_id=1;
}if(empty($notickets)|| empty($data)|| empty($seat)){
    echo "Fill all fields!";
        header("refresh:2; url=index.php");
}
    $sql="INSERT INTO booking(movieID,userID,'data',nr_tiketve,ulsja) VALUES ($movie_id,$user_id,'$data - $time','$notickets','$seat')";
    $insertBooking=$conn->prepare($sql);

    $insertBooking->execute()
    $
}
?>