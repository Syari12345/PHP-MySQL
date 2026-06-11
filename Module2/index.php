<?php
   $school="Digital School";

//    echo  "I love $school";

   $numri1= 120;
    $numri2= 5;



    echo $numri1 + $numri2;
    ?>

    <br>
    
       <?php echo $numri1 - $numri2; ?>
       <br>
       <?php echo $numri2 * $numri1; ?>
       <br>
       <?php echo $numri1 / $numri2; ?> 
       <br>

       <?php 
       $x=20;
       $y=8;

       echo "Mbetja: ".$x % $y;?>
       <br>

       <?php
       $a= "First ";
       $b= "Plane";

       $c=$a.$b." was departed in 1995";
       echo $c;
       ?>
       <br>
       <?php 
       $school="Digital School";
       echo "Gjatesia e stringut: ".$school." eshte: " .strlen($school);
       ?>

 <br>
 <?php
 echo "$c:".str_word_count($c);
 ?>
  <br>
 <?php
 $new_string = str_replace("o","Academy",$school);
 echo $new_string;
 ?>

 <br>
 <?php
  echo strrev($school);
  ?>






    