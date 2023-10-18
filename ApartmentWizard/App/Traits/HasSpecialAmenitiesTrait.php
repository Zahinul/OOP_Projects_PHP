<?php

namespace App\Traits;

trait HasSpecialAmenitiesTrait{
    protected $specialAmenities;
    protected $numAmenities;
    protected $costPerAmenity = 500000;
    public function addAmenity(string $amenity){
        //$amenityArray = 
        $this->specialAmenities=explode(',',$amenity);
    }
    public function getAmenities(){
        return $this->specialAmenities;
    }
    public function getAmenitiesCost(){
        $this->numAmenities = count($this->specialAmenities);
        return ($this->numAmenities)*($this->costPerAmenity);
    }
}