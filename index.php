<?php
class Student
{
    private $name;
    private $id;
    private $semester;

    function __construct($name, $id, $semester)
    {
        $this->name = $name;
        $this->id = $id;
        $this->semester = $semester;
    }

    function __set($prop, $value)
    {
        $this->$prop = $value;
    }

    function __get($prop)
    {
        return $this->prop;
    }
}

$sazzad = new Student("Sazzad", "20-43747-2", "Spring");
$siddique = new Student("Sazzad", "20-43747-2", "Spring");

if ($sazzad == $siddique) {
    echo "They are equal" . PHP_EOL;
} else {
    echo "They are not equal" . PHP_EOL;
}
if ($sazzad === $siddique) {
    echo "They are equal" . PHP_EOL;
} else {
    echo "They are not equal" . PHP_EOL;
}
