<html>
<form action='marksheet.php' method='POST'>
<b>Name of the student :</b> <input type='text' name='name' ><br><br>
<u>Marks in each subject:</u> <br><br>
Subject 1  : <input type='number' name='sub1' ><p>
Subject 2  : <input type='number' name='sub2' ><p>
Subject 3  : <input type='number' name='sub3' ><p>
Subject 4  : <input type='number' name='sub4' ><p>
Subject 5  : <input type='number' name='sub5' ><p>
<input type='submit' name="submit" value='Submit marks'>

</form>
</html>


<?php

require("connect1.php");

@$name = $_POST['name'];
@$sub_1 = $_POST['sub1'];
@$sub_2 = $_POST['sub2'];
@$sub_3 = $_POST['sub3'];
@$sub_4 = $_POST['sub4'];
@$sub_5 = $_POST['sub5'];
@$total_obtained = ($sub_1 + $sub_2 + $sub_3 + $sub_4 + $sub_5) ;
@$total_marks = 500 ;
@$percentage = ($total_obtained*100)/$total_marks ;

if($name && $sub_1 && $sub_2 && $sub_3 && $sub_4 && $sub_5 )
{
  echo "<br> <b>Marksheet of $name :</b> <br>";
  echo "Subject 1: $sub_1 <br>";
  echo "Subject 2: $sub_2 <br>";
  echo "Subject 3: $sub_3 <br>";
  echo "Subject 4: $sub_4 <br>";
  echo "Subject 5: $sub_5 <br>";
  echo "Total Marks Obtained :  $total_obtained <br>";
  echo "Total marks: $total_marks <br>";
  echo "Percentage:$percentage <br> ";

$write = "INSERT INTO class1 VALUES ('','$name', $sub_1, $sub_2, $sub_3, $sub_4, $sub_5, $total_obtained, $total_marks, $percentage)";

if ($connect1-> query ($write) === TRUE)
     {
			 echo "New record created successfully";
		 }
     else
     {
			 echo "Error: " . $write. "<br>" . $connect1->error;
	   }
}
$connect1->close();
?>