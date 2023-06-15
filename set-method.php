<?php
class student {
    private $name;
    
    public function _get($property){
        echo"You are trying to access Non existing or private property ($property)";
    }
    public function _set($property, $value){
        echo"This is a Non existing or private property ($property)";
    }

}

$test = new student();

$test->course = "PHP";





?>