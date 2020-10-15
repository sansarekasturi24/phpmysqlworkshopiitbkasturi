<html>
  <h1> Register</h1>
	<form action='register.php' method='POST'>
	 Your Name : <input type='text' name='name'><p>
	 Choose a username :<input type='text' name='username'><p>
	 Choose a password : <input type='password' name='password'><p>
	 Repeat your password :<input type='password' name='repeatpassword'><p>
   <input type='submit' name='submit' value='submit'><p>
	</form>
</html>
<?php
@$submit = $_POST['submit'];
	//form data
@$name = strip_tags($_POST['name']);
@$username = strtolower(strip_tags($_POST['username']));
@$password = strip_tags($_POST['password']);
@$repeatpassword =strip_tags($_POST['repeatpassword']);

if($submit)
{
	require("connection1.php");
  $query="SELECT username FROM marksheet WHERE username ='$username'";
	$namecheck =mysqli_query($connect,$query);
	$count = mysqli_num_rows($namecheck);
	if($count!=0)
	{
	 die("Username already taken!");
	}
	// check for existance
  if($name && $username && $password && $repeatpassword)
  {
   if($password == $repeatpassword)
	 {
				//chech char length of username and fullname
	  if(strlen($username)>25 || strlen($name)>25)
	  {
		 echo "Length of username or Name is too long!";
	  }
	  else
    {
	   if(strlen($password)>25 || strlen($password)<6)
		 {
		  echo "Password must be between 6 and 25 characters";
		 }
		 else
		 {
						//encrypt password
		  $password = md5($password);
		  $repeatpassword = md5($repeatpassword);
						//open database
		  $queryreg ="INSERT INTO `marksheet` (`id`,`name`,`username`,`password`) VALUES (' ','$name','$username','$password')";
	   }
    }
   }
	 else
 	 	echo "Your passwords do not match!";
  }
  else
	 echo "Please fill in <b>all</b> fields!";
	 if (@$connect->query($queryreg) === TRUE) {
 			 echo "Successfully Registered!<br><a href='login.php'>Log in</a>";
 		 } else {
 			 echo "Error: " . $queryreg. "<br>" . $connect->error;
 	 }
 }

?>
