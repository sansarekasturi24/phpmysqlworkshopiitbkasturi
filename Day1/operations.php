<?php
$num1 = readline('Enter no.1 :');
$num2 = readline('Enter no.2 :');
echo "1.Addition 2.Substraction 3.Multiplication 4.Division \n";
$ch = readline('Enter choice :');

switch($ch)
{
	case 1 :
	$res = $num2 + $num1;
    echo "Addition of $num2 and $num1 is : $res";
	break;
	
	case 2 :
	$res = $num2 - $num1;
    echo "Substraction of $num2 and $num1 is : $res";
	break;
	
	case 3 :
	$res = $num2 * $num1;
    echo "Multiplication of $num2 and $num1 is : $res";
	break;
	
	case 4 :
	$res = $num2 / $num1;
    echo "Division of $num2 and $num1 is : $res";
	break;
	
	Default :
	echo "Incorrect choice";
	
}	

?>