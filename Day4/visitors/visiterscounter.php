<?php
$visitors = 0;
$file = file_get_contents("counter.txt");
$visitorsnew = $visitors + 1;
$filenew = fopen("counter.txt","w");
fwrite($filenew,$visitorsnew);


echo "You are visitor number $visitorsnew to this site";

?>