<?php

namespace App\Classes;

use App\Classes\Meal;
use App\Interfaces\SetChargeInterface;
use App\Interfaces\SetDateInterface;
use app\Traits\HasConsumerTrait;

class BasicMeal extends Meal implements SetDateInterface, SetChargeInterface
{
    use HasConsumerTrait;
    private static $serialBasic=0;
    private $date;
    private $charge = 40;

    public function __construct($description,$date){
        parent::__construct($description);
        $this->date = $date;
    }
    public function getSerial()
    {
        self::$serialBasic++;
        return self::$serialBasic;
    }
    public function getDate(){
        return $this->date;
    }

    public function getCharge(){
        return $this->charge;
    }
    
    public function changeStatus(){
        $this->taken = true;
        return $this->taken;
    }

}