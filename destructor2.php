<?php
class cars
{   
    public $name;
    public $color;

    function __construct($name,$color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct()                          //the constructor and destructor is mainlt use for reduce the code
                                                   // __destruct() function that is automatically called at the end.
                                                   //__construct() function automattically called the create the object. 
    {
        echo "the car name:.$this->name. <br>
              the car color is:.$this->color.";
    }
}
$obj=new cars("valvo","red");   
?>
