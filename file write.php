<?php
$name=fopen("files.txt","a+") or die("no content");
$text1="abc\n";
//echo fwrite($name,$text1);
echo fread($name,filesize("files.txt"));
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
  echo fread($myfile,filesize("webdictionary.txt"));
  fclose($myfile);


   

fclose($name);

?>