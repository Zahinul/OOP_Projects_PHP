<?php
namespace App\Classes;

//abstract parent class
abstract class Meal
{
    ///protected $serial;
    protected $description;
    protected $taken;

    //Constructor
    public function __construct($description){
        $this->description = $description;
        $this->taken = false;
    }

    abstract public function changeStatus();

    //getters
    public function getDescription(){
        return $this->description;
    }
    public function isTaken(){
        return $this->taken;
    }
}