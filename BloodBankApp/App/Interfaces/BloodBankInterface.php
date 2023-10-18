<?php

namespace App\Interfaces;

use App\Classes\BloodDonor;

interface BloodBankInterface
{
    public function receiveBlood(BloodDonor $donor);
    public function getDonorsByBloodGroup(string $bloodGroup);
}