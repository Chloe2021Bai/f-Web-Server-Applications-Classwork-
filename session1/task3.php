<html>
  <head>
    <title>Exercise 1</title>
  </head>
<body>
<?php

//$i= 1;
//while ($i<=10){
  //echo $i;
  //echo $i++;

//};


?>
 <h1> Question 3 </h1>
             <?php 
               for($d=1;$d<=12;$d++){
               $nummult = $d*$d;
               echo" $d * $d = $nummult </br>";
               }
              ?>


        <h1> Question 4 </h1>
             <?php 
             	
                 echo "<table border='1' >";
                for ($row=1; $row <=7; $row++) { 
                	echo"<tr>";
                
               for ($col=1; $col <=7; $col++) { 
               	          $num= $col*$row;  
               	          echo"<td>$num</td>";

               	   }
               	   echo "</tr>";
                    }
                    echo "</table>";
              ?>
             
  </body>
</html>
