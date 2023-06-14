<?php
trait message1
{
    public function msg1()
    {
        echo "oop is a fun";
    }

}
trait message2
{
    public function msg2()
    {
        echo "oop is a crazy and funny";
    }

}

trait message3
{
    public function msg3()
    {
        echo "oop is a crazy and funny and d";
    }

}

trait message4
{
    public function msg4()
    {
        echo "oop is a crazy and funny and e";
    }

}
class welcome
{
    use message1;
}

class welcome2
{
    use message2 , message3 , message4;
}

class welcome3
{
    use message3;
}

class welcome4
{
    use message4;
}

$obj = new Welcome;
$obj->msg1();
echo "<br>";

$obj2 = new Welcome2();
// $obj3 = new Welcome3();
// $obj4 = new Welcome4();

$obj2->msg2();

$obj2->msg3();
;
$obj2->msg4();

