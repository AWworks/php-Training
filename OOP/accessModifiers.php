<?php
class Demo
{
    public $name = "GeeksforGeeks";

    public function showName()
    {
        return $this->name;
    }
}

$obj = new Demo();
echo $obj->name . "\n";
echo $obj->showName();
?>