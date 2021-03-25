<!DOCTYPE html>
<html>
  <head>
    <title> PHP exercise</title>
  </head>

  <body>
  	
<?php 

echo "If-else statement";
echo "<br></br>";
echo "1question</br>";

    $i = date('F',time());
	
	if($i == "December"){
		echo "It's December, here comes the snow";
	}
	else{
		echo "It's not December so you can keep the heating off";
	}

echo "<br></br>";
echo "2question</br>";

$count=0;
while($count !== 9){
	echo "abc";
	$count ++;
}
echo "<br></br>";

$i=0;
do{
	echo "xyz";
	$i++;
}
while($i <= 9);

echo "<br></br>";
$a=1;
for(; ;){
	if($a>9){
		break;
	}
	echo $a;
	$a++;
}
echo "<br></br>";

$b="item A";
for(; ;){
	if($b>"item F"){
		break;
			}
	echo $b;
	$b++;
	echo "<br></br>";

}

echo "<br></br>";
echo "3question</br>";


for($c=1;$c<=12;$c++){
    $d=$c*$c;
	echo "$c*$c=$d";
}	
echo "";


echo "<br></br>";
echo "4question</br>";

for($x=1;$x<=7;$x++){
for($y=1;$y<=$x;$y++){
	$z=$x*$y;
	echo "$x*$y=$z";
}	
echo "";
echo "<br></br>";
}
echo "";


echo "Additional PHP Loop questions";
echo "<br></br>";
echo "1question</br>";
for ($x=0; $x<=10; $x++) {
   echo "$x<br>";
}



echo "<br></br>";
echo "2question</br>";
$n=5;
for($i=1;$i<=$n;$i++)
{
for($j=1;$j<=$n;$j++){
echo " ";   
  }
for($k=1;$k<=($i-1)*1+1;$k++){
echo "*";  
}  
echo "<br/>"; 
}

echo "<br></br>";
echo "3question</br>";



echo "<br></br>";
echo "4question</br>";

echo "<table width='400px' heigt='400px' border='1'>";

for ($row=1; $row <=8; $row++) { 
	echo "<tr>";
	for ($col=1; $col<= 8 ; $col++) {
		$x = $col + $row;
if($x%2 == 1){

echo "<td width=30px height=30px bgcolor=#ffffff></td>";

}
else{

	echo "<td width=30px height=30px bgcolor=#000000></td>";
}

	}
	echo "</tr>";
}
echo "</table>"



 ?>
}
$x = $col * $row;
  </body>
  </html>