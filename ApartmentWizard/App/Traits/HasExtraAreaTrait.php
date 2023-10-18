<?php

namespace App\Traits;

trait HasExtraAreaTrait
{
    protected $eArea=0; 
    protected $points;
    protected $costPerPoints=500000;
    protected $costPerLuxuryPoints = 600000;
    protected $eCost;
    public function addExtraArea(string $eArea){
        $this->eArea=floatval($eArea);
    }
    public function getExtraArea(){
        return $this->eArea;
    }
    public function getExtraAreaCost(){
        $this->points = $this->eArea/100.00;
        $this->eCost=($this->points)*($this->costPerPoints);
        return $this->eCost;
    }
    public function getExtraLuxuryAreaCost()
    {
        $this->points = $this->eArea / 100.00;
        $this->eCost = ($this->points) * ($this->costPerLuxuryPoints);
        return $this->eCost;
    }
}