<?php

$first=fopen("C:\Users\Dell\Documents\hello.txt","r") or die("unable to inside the content");
 while(!(feof($first)))
{
    echo fgets($first)."<br>";
}
fclose($first);

?>