<?php

namespace App\Classes;
use App\Interfaces\SetAreaInterface;
use App\Interfaces\SetValueInterface;
use App\Traits\HasExtraAreaTrait;
use App\Traits\HasOwnerTrait;

class StandardApartment extends Apartment implements SetAreaInterface,SetValueInterface
{
    use HasExtraAreaTrait, HasOwnerTrait;

    private $baseArea = 1500; 
    private $baseValue = 6000000;
    public function getBaseArea(){
        return $this->baseArea;
    }
    public function getBaseValue(){
        return $this->baseValue;
    }
    public function changeStatus(){
        $this->sold=true;
    }

}