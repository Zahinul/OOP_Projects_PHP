<?php

namespace App\Traits;

use App\Classes\BloodDonor;

trait BloodTestingTrait
{
    protected $group;
    public function testBloodGroup(BloodDonor $donor){
        $this->group = $donor->getBloodGroup();
        return $this->group;
    }
}