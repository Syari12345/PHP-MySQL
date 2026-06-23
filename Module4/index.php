<?php

$fruits=array("Mango"."Banana","Apple","Apricot","Cherries","Pear","Orange");

echo count($fruits)."<br>";//7

foreach($fruits as $fruit){
    echo "$fruit, <br>";
}

for($i=0;$i<count($fruits);$i++){
    echo $fruits[$i].",<br>";
}


$x=3.14;
echo gettype($x); //int

echo "<br>Version of PHP: ".phpversion();


//functions qe i krijojme ne
function sum(){
    echo "<br> Sum of two numbers: "
    echo 120+30;
}

sum();

function maximum($x,$y){
    if($x<$y){
        return $y;
    }else{
        return $x;
    }
}

  $greatest=maximum(-50,20);
  echo "<br>The maximum number is: $greatest<br>";

  function odd_or_even($number){
    if($number %2 ==0){
        return "Even";
    }else{
        return "Odd";
    }
  }

  echo odd_or_even(77);



?> 





