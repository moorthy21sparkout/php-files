<?php
class opp
{
    public $a,$b,$c;   //property
    /*function __construct()   //default constructor
    {
echo "run";
    }*/
    function __construct($a,$b)     //parameater constructor.
    {
        $this->a=$a;
        $this->b=$b;
    }
    function add()     //method
    {
        $this->c=$this ->a+$this->b;
        return $this->c;
    }
    function sub()
    {
        $this->c=$this ->a-$this->b;
        return $this->c;
    }
}

$obj=new opp(100,1);
echo "the value is :".$obj->add();
echo "<br>the value is :".$obj->sub();


?>