<?php

namespace app\Traits;

trait HasGuestTrait
{
    protected $guests= [];
    protected $extra=90;
    public function addGuest($guest){
        $this->guests[] = $guest;
    }
    public function getGuests(){
        return $this->guests;
    }
    public function extraCharge(){
        return $this->extra;
    }

}