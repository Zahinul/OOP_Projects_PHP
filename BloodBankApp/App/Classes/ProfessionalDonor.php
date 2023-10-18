<?php

namespace App\Classes;

use App\Classes\BloodDonor;

class ProfessionalDonor extends BloodDonor
{
    protected string $type = "Professionally";
    public function donateBlood()
    {
        return $this->type;
    }
}