<?php

namespace app\Classes;

//abstruct parent class
abstract class Task
{
    //var declarations
    protected $name;
    protected $description;
    protected $status;

    //constructor
    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
        $this->status = false;
    }

    //abstruct methods

    abstract public function getPriority();
    abstract public function changeStatus();

    //getters

    public function getName()
    {
        return $this->name;
    }                
    public function getDescription()
    {
        return $this->description;
    }
    public function isFinished()
    {
        return $this->status;                                              
    }
}
