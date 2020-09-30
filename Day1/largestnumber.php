<?php
$num1 = readline('Enter no.1 :');
$num2 = readline('Enter no.2 :');

if($num1>$num2)
   echo "The largest number is $num1";
   
else if($num2==$num1)
   echo "Both the numbers are equal";
   
else 
   echo "The largest number is $num2";
?>