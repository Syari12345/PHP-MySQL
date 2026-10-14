<?php

include("config.php");

$sql = "SELECT * FROM students";

$result = $conn->prepare($sql);
  $result->execute();
$studentData = $result->fetchAll();

?>
<table>
       <thead>

          <tr>
            <th>Name</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Residence</th>
            <th>Action</th>
        </tr>

 </thead>


    <tbody>

        <?php
         foreach($studentData as $student){
        ?>

     <tr>

           <td><?= $student['name'] ?></td>
            <td><?= $student['lastname'] ?></td>
            <td><?= $student['email'] ?></td>
            <td><?= $student['residence'] ?></td>
               <td>
                Delete | Edit
            </td>


        </tr>

        <?php
        }
        ?>
</tbody>



</table>
