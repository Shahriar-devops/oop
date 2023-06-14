<?php
class base
{
    protected $name;

    public function __constructor($n)
    {
        $this->name = $n;
    }

    public function show()
    {
        echo "your name :" . $this->name . "<br>";
    }
}

class derived extends base{
    public function get (){
        echo "Your Name: " . $this->name . "<br>";
    }
}

$test = new derived("google baba");

// $test ->name = "baba google";

$test->get();

?>