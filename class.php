<?php
class car{

//outside class variable but inside the class property
public $name;
public $color;
//outside function inside the class its name method
function set_name($name)
{
$this->name=$name;
}
function get_name()
{
    return $this->name;
}
}
$valvo= new car();
$tata=new car();
$valvo->set_name('valvo');
$tata->set_name('tata');

echo $tata->get_name();
echo "<br>";
echo $valvo ->get_name();
?>


