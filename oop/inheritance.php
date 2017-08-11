<?php
/**
 * Created by PhpStorm.
 * User: skimeli
 * Date: 8/10/17
 * Time: 5:01 PM
 */
class Employee {

    public $username = "";
    private $loggedIn = false;

    public function login() {
        echo "$this->username <br>";
        $this->loggedIn = true;
    }

    public function logout() {
        $this->loggedIn = false;
    }

    public function isLoggedIn() {
        return $this->loggedIn;
    }
}

class Developer extends Employee {

    public function createTask( $forumTask ) {
        echo "$this->username created a new task: $forumTask<br>";
    }

    public function banEmployee( $employee ) {
        echo "$this->username banned the Employee: $employee->username<br>";
    }

}
// Create a new member and log them in
$employee = new Employee();
$employee->username = "John Doe";
$employee->login();
$employee->logout();
//
//// Create a new administrator and log them in
$dev = new Developer();
$dev->username = "Melvin Mercy";
$dev->login();           // Displays "Log entry: Mary logged in"
$dev->createTask('trending githeriman');