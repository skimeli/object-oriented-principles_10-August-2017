<?php

class student
{
    public $name;
    public $age;

    function __construct($n, $a)
    {
        $this->name=$n;
        $this->age=$a;

    }

    public function setAge($ag)
    {
        $this->ag=$ag;
    }

    public function display()
    {
        echo  "welcome ".$this->name."
";

        return $this->age-$this->ag;
    }
}
 
$student=new student("Sharon",14);
 
$student->setAge(20);
 
echo "You are ".$student->display()." years old. Have a good day";
 
?>