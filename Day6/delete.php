<html>
<form action="delete.php" method="POST">
<label>Enter the username who's RECORD should be deleted : </label><input type="text" name="username">
<input type="submit" name="submit" value="Delete">
</form>
</html>
<?php
@$username = $_POST['username'];
if (isset($_POST['submit'])) {
	require("connection1.php");
	$getRollNo = "SELECT * FROM marksheet WHERE username = '$username'";
	$getRollNo_query = mysqli_query($connect,$getRollNo);
	$numrows = mysqli_num_rows($getRollNo_query);
	if ($numRows = 1 ) {
		$deleteRec = "DELETE FROM `marksheet` WHERE `username` ='$username'";
		$deleteRec_query = mysqli_query($connect,$deleteRec);
		echo "Successfully deleted !";

	}else
		echo "<br>Check Roll No";
}
echo "<p><a href = 'admin.php'> Admin Home Page</a><br>";
?>
