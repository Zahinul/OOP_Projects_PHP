<?php

namespace App\Classes;

abstract class BloodDonor
{
    protected string $name;
    protected int $age;
    protected string $bloodGroup;

    //constructor
    public function __construct($name, $bloodGroup, $age)
    {
        $this->name = $name;
        $this->age = $age;
        $this->bloodGroup = $bloodGroup;
    }

    //abstract method
    abstract public function donateBlood();

    //getters
    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getBloodGroup()
    {
        return $this->bloodGroup;
    }

    //generic display method
    public function displayDonorInfo()
    {
        echo "Name: " . $this->getName().PHP_EOL;
        echo "Blood Group: " . $this->getBloodGroup() . PHP_EOL;
        echo "Age: " . $this->getAge() . PHP_EOL;
    }

}