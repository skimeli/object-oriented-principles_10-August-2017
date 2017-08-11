<!DOCTYPE html>
<html>
<head>
    <title>Classes are here </title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<p>
<?php

class Person {
    // Creating some properties (variables tied to an object)
    public $isAlive = true;
    public $firstname;
    public $gender;
    public $lastname;



    public function __construct($firstname,$gender, $lastname) {
        $this->firstname = $firstname;
        $this->gender = $gender;
        $this->lastname = $lastname;

    }

    public function greet() {
        return "Hey heey " . $this->firstname . " " . $this->lastname . ". Having a good time?";
    }
}

$me = new Person('Mercy', 'female', 'Doe');


echo $me->greet();
?>
</p>
</body>
</html>