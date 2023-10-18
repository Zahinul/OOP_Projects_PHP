<?php

namespace App\Classes;

use App\Classes\BloodDonor;

class VolunteerDonor extends BloodDonor
{
    protected string $type = "Voluntarily";
    public function donateBlood(){
        return $this->type;
    }
}