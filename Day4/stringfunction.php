<html>
<form  action='stringfunction.php' method='POST'>
String:<input type='text' name='string'><br>
<input type='submit' value ='click here'>
</form>
</html>

<?php
@$string=$_POST['string'];


//$string = "my name is Kasturi";


//number of character in string
$length = strlen($string);
echo " length = $length";
echo "<br>";

//breaking string into an array
$exparray = explode(" ",$string);
print_r (explode(" ",$string));
echo "<br>";

//reverse string 
$reverse = strrev("$string");
echo "revese = $reverse";
echo "<br>";

//lower case form 
$lowercase=strtolower($string);
echo "lowercase = $lowercase";
echo "<br>";

//upper case form
$uppercase = strtoupper($string);
echo "uppercase = $uppercase";
echo "<br>";

//$replace = "my name is Kasturi";
$result = substr_replace($string,"anything",11,13);
echo "result = $result ";





?>
