<?php
use App\Classes\LuxuryApartment;
use App\Classes\StandardApartment;

include 'autoloader.php';

//initializing object of standard apartment
$apt1 = new StandardApartment('501','3');
$apt1->addExtraArea('300');
$apt1->changeStatus();
$apt1->addOwner('Salman Khan');

//initializing object of luxury apartment
$apt2 = new LuxuryApartment('802','4');
$apt2->addExtraArea('1000');
$apt2->addAmenity('Swimming Pool,Gymnasium,Tennis Lawn,Restaurant & PartyCenter,Laundry Service,Billiard');
$apt2->changeStatus();
$apt2->addOwner('Shahrukh Khan');
$apt2->addOwner('Gauri Khan');
$apts = [$apt1,$apt2];
echo "Apartment Details:\n\n";
foreach($apts as $key=>$apt){
    //$owners = $apt->getOwners();
    echo "Serial No.: " . ($key + 1) . PHP_EOL;
    if($apt instanceof LuxuryApartment){
        echo "- Apartment Type: Luxury\n";
    }else{
         echo "- Apartment Type: Standard\n";
    }
    echo '- Apartment Number: '.$apt->getAptNum().PHP_EOL;
    echo "- Base Area(Sq. Ft): ".$apt->getBaseArea().PHP_EOL;
    echo "- Extra Area Availed(Sq. Ft): ".$apt->getExtraArea().PHP_EOL;
    echo '- Total Area (Sq. Ft): '.$apt->getBaseArea()+$apt->getExtraArea().PHP_EOL;
    echo '- Number of Bedrooms: '.$apt->getRooms().PHP_EOL;
    if($apt instanceof LuxuryApartment){
        echo "- Availed Special Amenities: \n";
        $amenities = $apt->getAmenities();
        foreach($amenities as $key=>$amenity){
            echo ' '.($key+1).'. '.$amenity.PHP_EOL;
        }
        echo '- Total Apartment Price(BDT): '.$apt->getBaseValue()+$apt->getExtraLuxuryAreaCost()+$apt->getAmenitiesCost().PHP_EOL;
        if ($apt->isSold()) {
            echo "- Status: Sold Out\n";
            $owners = $apt->getOwners();
            echo "Owner/Owners:\n";
            foreach($owners as $key=>$owner){
                echo ' '.($key+1).'. '. $owner."\n";
            }
        } else {
            echo "- Status: Ready for Sale\n";
        }
    }else{
        echo '- Total Apartment Price(BDT):  '.$apt->getBaseValue()+$apt->getExtraAreaCost().PHP_EOL;
        if ($apt->isSold()) {
            echo "- Status: Sold Out\n";
            $owners = $apt->getOwners();
            echo "Owner/Owners:\n";
            foreach ($owners as $key => $owner) {
                echo ' '.($key + 1) . '. ' . $owner."\n";
            }
        } else {
            echo "- Status: Ready for Sale\n";
        }
    }
    echo "\n";
}