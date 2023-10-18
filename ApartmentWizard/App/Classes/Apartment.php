<?php

namespace App\Classes;

abstract class Apartment
{
    protected $aptNum;
    protected $rooms;
    //protected $area;
    protected $sold=false;
    public function __construct($aptNum,$rooms/*,$area*/){
        $this->aptNum = $aptNum;
        $this->rooms = $rooms;
        //$this->area = $area;
    }
    abstract public function changeStatus();

    public function getAptNum(){
        return $this->aptNum;
    }
    public function getRooms(){
        return $this->rooms;
    }
    public function isSold(){
        return $this->sold;
    }

}