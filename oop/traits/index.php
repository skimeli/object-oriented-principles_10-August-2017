<?php
require 'property.php';

class student {
    use Properties;
    public function __construct($first, $last) {
        $this->properties['firstname'] = $first;
        $this->properties['lastname'] = $last;
    }
    public function get_fullname() {
        echo "Get fullname\n";
        return $this->firstname.' '.$this->lastname;
    }
    public function get_firstname() {
        echo "Get firstname\n";
        return 'F:'.$this->properties['firstname'];
    }
    public function set_firstname($value) {
        echo "Set firstname=$value\n";
        $this->properties['firstname'] = trim($value);
    }
    public function get_lastname() {
        echo "Get lastname\n";
        return 'L:'.$this->properties['lastname'];
    }
    public function set_lastname($value) {
        echo "Set lastname=$value\n";
        $this->properties['lastname'] = trim($value);
    }
}
$student = new student('Sharon', 'Princess');
echo $student->fullname."\n";
$student->firstname = 'millicent';
$student->lastname = 'Queen';
echo $student->fullname."\n";
?>