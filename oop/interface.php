<?php
/**
 * Created by PhpStorm.
 * User: skimeli
 * Date: 8/10/17
 * Time: 3:41 PM
 */

interface Chargeable {
    public function getPrice();
}

class Employee implements Chargeable {
    protected $price;

    public function getPrice() {
        return $this->price;
    }
}

$product = new Employee();

?>