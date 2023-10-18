<?php
use App\Classes\BloodBank;
use App\Classes\ProfessionalDonor;
use App\Classes\VolunteerDonor;

include 'autoloader.php';
$donor1 = new VolunteerDonor('Alice','O+',25);
$donor2 = new VolunteerDonor('Bob','A-',30);
$donor3 = new ProfessionalDonor('Charlie', 'AB-', 28);
$donor4 = new ProfessionalDonor('Derek', 'A-', 24);
$donors = [$donor1, $donor2, $donor3, $donor4];

$bloodBankObj = new BloodBank;
$bloodBankObj->receiveBlood($donor1);
$bloodBankObj->receiveBlood($donor2);
$bloodBankObj->receiveBlood($donor3);
$bloodBankObj->receiveBlood($donor4);

echo "\n";
echo "List of Donors: \n";
$bloodBankObj->displayDonors();

echo "Donors with Blood Group (A-): \n";
$donorsByBG = $bloodBankObj->getDonorsByBloodGroup('A-');
foreach($donorsByBG as $donor){
    $donor->displayDonorInfo();
}

echo "\nPolymorphism Example: \n";
foreach($donors as $donor){
    echo $donor->getName()." donated blood ".$donor->donateBlood().PHP_EOL;
}