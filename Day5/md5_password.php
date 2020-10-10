<form action = 'md5_password.php' method = 'POST'>
Enter Username:     <input type = 'name' name='Username'><br><br>
Enter Your Password: <input type = 'text' name = 'Password'>
                     <input type = 'submit' value = 'Login'>
</form>

<?php

require("conn.php");

@$username = $_POST['Username'];
@$password = $_POST['Password'];



$passwordenc = md5($password);

if($username && $passwordenc)
{
    $write = "INSERT INTO data1 VALUES('$username','$passwordenc')";
             
    if($conn-> query ($write) === TRUE)
        {
            echo"<br>Record created successfully!";
        }
    else
        {
            echo"Error: ".$write. "<br>" .$conn->error;
        }
} 
$conn->close();


?>

