<?php

class Person
{
    private $name, $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function showProfile()
    {
        return "Name : ".$this->name.PHP_EOL."Age : ".$this->age;
    }
}