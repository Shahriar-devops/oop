<?php
class student{
    public $name;
    public $course;

    public function __construct($n){
        $this->name = $n;
    }

    public function __setCourse(course $c){
        $this->course = $c;
    }
}

class course{
    public $cname;
    public function __construct($cn){
        $this->cname = $cn;
    }
}



$student1 = new student('google baba');
$course1 = new course('PHP');

$student1 ->setCourse($course1);

$student2 = clone $student1;

$student2->name = 'shoron';
$student2->course->cname = 'Python';

print_r($student1);

echo $student1->name;
echo "<br>";
echo $student2->name;
?>