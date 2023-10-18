<?php

namespace App\Classes;

use App\Classes\BloodDonor;
use App\Interfaces\BloodBankInterface;
use App\Traits\BloodTestingTrait;

class BloodBank implements BloodBankInterface
{
    use BloodTestingTrait;
    private $donors = [];
    public function receiveBlood(BloodDonor $donor)
    {
        $this->donors[] = $donor;
        // foreach ($this->donors as $donorObj){
        //     echo "Blood received from Donor: " . $donorObj->getName().PHP_EOL;
        // }
        echo "Blood received from Donor: " . $donor->getName() . PHP_EOL;
    }
    public function getDonorsByBloodGroup(string $bloodGroup)
    {
        $donorsByBg = [];
        foreach ($this->donors as $donorObj) {
            $bg = $donorObj->getBloodGroup();
            if ($bg == $bloodGroup) {
                $donorsByBg[] = $donorObj;
            }
        }
        return $donorsByBg;
    }
    public function displayDonors()
    {
        foreach ($this->donors as $donorObj) {
            $donorObj->displayDonorInfo();
            echo "Blood Test for Donor: " . $donorObj->getName() . PHP_EOL;
            $testResult = $this->testBloodGroup($donorObj);
            echo "Output for Blood Group Test: " . $testResult.PHP_EOL;
            if ($testResult == $donorObj->getBloodGroup()) {
                echo "Result: Blood Group is compatible\n\n";
            } else {
                echo "Result: Blood Group isincompatible\n\n";
            }
        }
    }
}