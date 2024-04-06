<?php
class fruits 
{
 public $name;
 public $color;
 function __construct($name)
 {
  $this->name = $name;  
 } 
 function __destruct()
 {
    echo "the fruits is:.$this->name.<br>";
    echo "<hr>";

 }
 


}
echo "<hr>";
$obj=new fruits("ornge");               



?>
