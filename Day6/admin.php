<html>
<h1>Add new student record</h1>
<form action="admin.php" method="POST">
Username:<input type="text" name="username" ><br><br>
Marks obtained in PHP	<input type="number" name="phpMarks" ><br><br>
Marks obtained in MYSQL:	<input type="number" name="mysqlMarks"><br><br>
Marks obtained in HTML:	<input type="number" name="htmlMarks"><p><br>
	<input type="submit" name="submit" value="Enter"><p><br>
  </form>
	<a href = 'delete.php'>Delete a Record</a><br>
</html>
<?php
@$username = $_POST['username'];
@$php = $_POST['phpMarks'];
@$mysql = $_POST['mysqlMarks'];
@$html = $_POST['htmlMarks'];

@$total = $php + $mysql + $html;
$tot=100;
$percent = $total / 3 ;
//testing
//echo $total."<br>";
//echo $percent." %<br>";
//echo $rollNo;
if (isset($_POST['submit'])) {
	require('connection1.php');
	if ($percent < 100) {
		$getRollNo = "SELECT * FROM marksheet WHERE username = '$username'";
		$getRollNo_query = mysqli_query($connect ,$getRollNo);
		$numrows = mysqli_num_rows($getRollNo_query);
		if ($numrows != 0) {
			//$getRow = "SELECT * FROM login WHERE ";
			$addStudent = "UPDATE `marksheet` SET `php`=$php , `mysql`=$mysql, `html`=$html ,`total obtained`=$total ,`total marks`=$tot,`percent`=$percent WHERE `username` = '$username'";
			$addStudent_query = mysqli_query($connect,$addStudent);
			echo "Marklist updated for username : ".$username."<br>	Php : ".$php."<br>MySql : ".$mysql."<br>HTML : ".$html;
			echo "<p><a href = 'logout.php'>Logout</a><p>";
			//echo "<a href = 'config.php'>Admin Home Page</a><br>";
		}else
			echo "<P>Check roll number";

	}else
	echo "<p>Enter marks between 0 - 100 ";

}else
	echo "Please fill all  fields";
?>
