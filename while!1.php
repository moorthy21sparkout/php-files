<?php
$newone=fopen("files.txt","r") or die("not presented");
while(!(feof($newone)))
{
echo fgetc($newone)."<br>";
}
fclose($newone);

?>
