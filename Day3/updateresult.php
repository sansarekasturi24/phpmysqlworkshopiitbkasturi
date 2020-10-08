<?php
require("connect1.php");
$update = mysqli_query( $connect1 ,"UPDATE class1 SET sub5='99' where name='Rohan'");



?>