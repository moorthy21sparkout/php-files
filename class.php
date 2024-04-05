<?php
function add(){                    // procedural programming
    $a=10;
    $b=23;
    $c=$a+$b;
    return $c;
}
function sub()
{
    $a=10;
    $b=1;
    $c=$a*$b;
    return $c;
}
echo "total value is: ".add();
echo "<br> total value is:".sub();
echo "<hr>";
class opp{                                         //object orented programming.
    public $a,$b,$c;//property.

    function add()
    {
        $this->c=$this->a+$this->b;
        return $this->c;
    }
    function sub()
    {
        $this->c=$this->a-$this->b;
        return $this->c;
    }
}
$obj=new opp();
$obj->a=12;
$obj->b=14;
echo "toatal value is:".$obj->sub();
echo "<br>toatal value is:".$obj->add();
?>