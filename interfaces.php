<?php
interface Animal{
    public function makeSound();

}

class Cat implements Animal {
    public function makeSound(){
echo "Meow";

    }
}

$animal = new cat();
$animal->makeSound();



?>