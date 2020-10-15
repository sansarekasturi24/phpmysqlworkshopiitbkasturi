<html>
  <h1> Login</h1>
<form action='login.php' method='POST'>
Username: <input type='text' name='username'><br><br>
Password: <input type='password' name='password'><br><br>
<input type='submit' name='login'>
</form>
<a href='register.php'>Register</a><br><br>
<a href="adminlogin.php">Admin page</a><br><br>
</html>
<?php
session_start();
@$username = $_POST['username'];
@$password = $_POST['password'];
if(@$_POST['login'])
{
	if($username && $password)
	{
    require("connection1.php");
	$extract="SELECT * From marksheet WHERE username='$username'";
	$query= mysqli_query($connect,$extract);
	$numrows = mysqli_num_rows($query);
	if ($numrows!=0)
	{
	//code to login

	 while ($row=mysqli_fetch_assoc($query))
	 	{
			$dbusername = $row['username'];
			$dbpassword = $row['password'];

		}
		if($username==$dbusername && md5($password)==$dbpassword)
		{
			echo "You're in!<a href='member.php'>Click</a>here to view your result ";
			$_SESSION['username']=$username;
		}
		else
		 echo "Incorrect password!";
 	}
	else
	die("That user does't exist!");


}
	else
  	die("Please enter  username and Password!");
}else
 echo "Please fill in <b>all</b> fields!";
	?>
