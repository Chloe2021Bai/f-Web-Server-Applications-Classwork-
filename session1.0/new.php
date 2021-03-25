<！DOCTYPE html>
<html>
  <head>
    <title> PHP exercise</title>
  </head>

  <body>
    <h1>"Hello World"</h1>
   
      <?php

      echo "Hello World";
      echo "<br></br>" ;

      
      echo "1,question";
      echo "<br></br>" ;
            $string1 = "Birmingham";
            $string2 = "City";

             echo $string1;
             echo "<br></ber>" ;
             echo $string2;

             echo "<br></ber>" ;

      echo "2,question";
      echo "<br></ber>" ;

             $x = 15;
             $y = 8;

               echo ($x + $y);
               echo "<br></ber>" ;
               echo ($x - $y); 
               echo "<br></ber>" ;
               echo ($x * $y);
               echo "<br></ber>" ;
               echo ($x / $y); 
               echo "<br></ber>" ;
               echo ($x % $y); 
               echo "<br></ber>" ;

 echo "3,question";
 echo "<br></ber>" ;

    $number1 = "Value is now 8<br>";
    $Add = "Add 2. Value is now 10<br>";
    $Subtract = "Subtract 4. Value is now 6<br>";
    $Multiply = "Multiply by 5. Value is now 30<br>";
    $Divide = "Divide by 3. Value is now 10<br>";
    $Increment = "Increment value by one. Value is now 11<br>";
    $Decrement = "Decrement value by one. Value is now 10<br>";
    echo "$number1; $Add,$Subtract, $Multiply,$Divide,$Increment,$Decrement";

echo "<br></ber>" ;


echo "4,question";
 echo "<br></ber>" ;

$name = "Harry";
$age = 28;
var_dump($name);
echo "<br>";
echo $name;
echo "<br>";
  var_dump($age);
  echo "<br/>";
  echo $age;
  echo "<br/>";

echo "5,question";
 echo "<br></ber>" ;


   $around = "around";
  echo "What goes around comes $around.<br>";
  echo 'What goes around comes $around.<br>';



     $whatsit = "happy";
     echo "value is".gettype($whatsit)."<br/>\n";

      $whatsit = 77;
     echo "value is".gettype($whatsit)."<br/>\n";

      $whatsit = true;
     echo "value is".gettype($whatsit)."<br/>\n";

      $whatsit = 2;
     echo "value is".gettype($whatsit)."<br/>\n";

      $whatsit = null;
     echo "value is".gettype($whatsit)."<br/>\n";

    










echo "<br></br>";

define("PI",3.1415926);
$r = 3;
echo "a circular area with a radius of 3".PI*($r*$r);

echo "<br></br>";

$a=5;
$b=6;

echo "When one side is 5, and the other side is 6, then the other side is".hypot(5,6);


   ?>
   




  </body>

</html>


