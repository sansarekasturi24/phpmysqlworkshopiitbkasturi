<?php
$matrixa = array(array(5,3),array(2,4));
$matrixb = array(array(2,1),array(9,7));

echo "Matrix addition <br>";
 
for($i=0;$i<2;$i++)
{
    for($j=0;$j<2;$j++)
	{
	    echo $matrixa[$i][$j] + $matrixb[$i][$j]."  ";
	}	
    echo "<br>";
}	
	
?>