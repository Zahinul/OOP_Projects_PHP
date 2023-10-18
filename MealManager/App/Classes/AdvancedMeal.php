<?php

namespace App\Classes;

use App\Classes\BasicMeal;
use App\Interfaces\SetChargeInterface;
use App\Interfaces\SetMenuInterface;
use app\Traits\HasConsumerTrait;
use app\Traits\HasGuestTrait;


class AdvancedMeal extends BasicMeal implements SetMenuInterface, SetChargeInterface
{
    use HasGuestTrait, HasConsumerTrait;

    private static $serialAdvanced = 0;
    private $menu;
    private $charge = 100;

    public function __construct($description, $date, $menu)
    {
        parent::__construct($description, $date);
        $this->menu = explode(',', $menu);
    }
    public function getSerial()
    {
        self::$serialAdvanced++;
        return self::$serialAdvanced;
    }

    public function getMenu()
    {
        return $this->menu;
    }
    public function getCharge()
    {
        return $this->charge;
    }

    // public function __destruct(){

    // };


}