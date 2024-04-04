<?php
$myfile=fopen("files.txt","r") or die("unable to open file");
echo fread($myfile,filesize("files.txt"));
fclose($myfile);
?> 

<br>

<?php
$myfile=fopen("files.txt","r") or die("unable to open file");
echo fgets($myfile);
fclose($myfile);
?> 
