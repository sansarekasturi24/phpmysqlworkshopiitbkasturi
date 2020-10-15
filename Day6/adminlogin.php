<html>

<form action='adminlogin.php' method='POST'>
Username: <input type='text' name='unameadmin'><br><br>
Password: <input type='password' name='adminpass'><br>
<input type='submit' name='login'>
</form>
<?php
session_start();

@$unameadmin = $_POST['unameadmin'];
@$adminpass = $_POST['adminpass'];

//echo $passAdminEnc;

if ($unameadmin&&$adminpass) {
	require('connection1.php');
	$getAdminData = "SELECT * FROM marksheet WHERE username = 'adminpage'";
	$getAdminData_query = mysqli_query($connect,$getAdminData);
	if ($getAdminData_query) {
		while ($row = mysqli_fetch_assoc($getAdminData_query)) {
			$dbAdminUsername = $row['username'];
			$dbAdminPassword = $row['password'];
			//echo $dbAdminPassword;

		}
		if ($unameadmin==$dbAdminUsername&&md5($adminpass)==$dbAdminPassword) {
			$_SESSION['username'] = 'adminpage';
			echo "Welcome ADMIN!<br><p><a href = 'admin.php'>Admin Config page</a>";
		}else
			echo "Incorrect password or username";
	}else
		echo "Error";
}else
	echo "Please fill all fields";
?>
