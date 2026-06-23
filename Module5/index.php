<?php

$students=array(
 array("Drini","Prishtine",13),
 array("Syari","Prishtine",16),
 array("Lindrit","Berlin",16),
 array("Edlira","Kastriot",17),
 array("Patris","London",16),

);

for (row=0;$row<count($students);$row++){
    echo "<ul>";
    for($colum=0;$colum<count($students[row]);$column++){
        echo "<li>".$students[$row][$column]."</li>";
     }
    echo "</ul>";
}

?>