<?php 

namespace App\Classes;
use App\Traits\HasExtraAreaTrait;
use App\Traits\HasOwnerTrait;
use App\Traits\HasSpecialAmenitiesTrait;

class LuxuryApartment extends StandardApartment
{
    use HasExtraAreaTrait,HasOwnerTrait,HasSpecialAmenitiesTrait;
    private $baseArea = 2000;
    private $baseValue = 10000000;

    public function getBaseArea()
    {
        return $this->baseArea;
    }
    public function getBaseValue()
    {
        return $this->baseValue;
    }

}