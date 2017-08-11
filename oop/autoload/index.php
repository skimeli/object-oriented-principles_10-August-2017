<?php
/**
 * Created by PhpStorm.
 * User: skimeli
 * Date: 8/10/17
 * Time: 8:01 PM
 */
function __autoload($class_name) {
    if(file_exists($class_name . '.php')) {
        require_once($class_name . '.php');
    } else {
        throw new Exception("Unable to load $class_name.");
    }
}

try {
    $a = new Hello();
    $b = new First();
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
?>