<?php

namespace App\Traits;

trait HasOwnerTrait
{
    protected $owners=[];
    public function addOwner(string $owner){
        $this->owners[]=$owner;
    }
    public function getOwners(){
        return $this->owners;
    }
}