<?php
use App\Classes\LuxuryApartment;
use App\Classes\StandardApartment;

include 'autoloader.php';
$apts = [];
// print "Enter Number of Apartments you want to enter: ";
// fscanf(STDIN, "%d", $count);

echo "Welcome to Apartment Store.\n";
echo "Do you want to add specifics of some apartments? (Y/N): ";
$cons = trim(fgets(STDIN));
if($cons == "Y"){
    $loopCounter = true;
    while ($loopCounter) {
        echo "Enter Apartment Type(Standard/Luxury):";
        $type = trim(fgets(STDIN));
        print "Enter Apartment Number: ";
        $apt_num = trim(fgets(STDIN));
        print "Enter Number of Bedrooms: ";
        $room_num = trim(fgets(STDIN));
        if ($type == "Standard") {
            $apt = new StandardApartment($apt_num, $room_num);
        } else if ($type == "Luxury") {
            $apt = new LuxuryApartment($apt_num, $room_num);
        } else {
            echo "Error: Wrong Input!";
        }
        print "Base Arae You will be Offered(Sq. Ft): ". $apt->getBaseArea().PHP_EOL;
        print "Charge for extra area:\n- Standard Type - BDT 500000 per 100 Sq. Ft\n- Luxury Type - BDT 600000 per 100 Sq. Ft.\n";
        print "Want to add extra area? (Y/N):";
        $rep1 = trim(fgets(STDIN));
        if ($rep1 == "Y") {
            print "Enter amount of extra area(Sq. Ft): ";
            $rep2 = trim(fgets(STDIN));
            $apt->addExtraArea($rep2);
        }
        if ($apt instanceof LuxuryApartment) {
            print "List Special Amenities you can avail from: \n";
            echo "- Swimming Pool\n- Gym\n- Party Center\n- Food Catering\n- Laundry\n- Indoor Table Tennis\n- Billiard\n- Library\n- Prayer Hall\n";
            print "(Caution) You will be charged BDT 500000 for each special amenities you avail.\n";
            print("Enter Special Amenities you would like: ");
            $rep3 = trim(fgets(STDIN));
            $apt->addAmenity($rep3);
        }
        print "Is it sold? (Y/N): ";
        $rep4 = trim(fgets(STDIN));
        if ($rep4 == "Y") {
            $apt->changeStatus();
            print "Enter Name of the owner: ";
            $rep5 = trim(fgets(STDIN));
            $apt->addOwner($rep5);
        }
        $apts[] = $apt;
        print "Want to add specifics of another apartment? (Y/N): ";
        $rep5 = trim(fgets(STDIN));
        if ($rep5 == 'N') {
            $loopCounter = false;
        }
    }
    echo "\nDo you want to see the specifics of the apartment recorded above? (Y/N):";
    $rep6 = trim(fgets(STDIN));
    if ($rep6 == "Y") {
        echo "\n\nApartment Details:\n\n";
        foreach ($apts as $key => $apt) {
            echo "Serial No.: " . ($key + 1) . PHP_EOL;
            if ($apt instanceof LuxuryApartment) {
                echo "- Apartment Type: Luxury\n";
            } else {
                echo "- Apartment Type: Standard\n";
            }
            echo '- Apartment Number: ' . $apt->getAptNum() . PHP_EOL;
            echo "- Base Area(Sq. Ft): " . $apt->getBaseArea() . PHP_EOL;
            echo "- Extra Area Availed(Sq. Ft): " . $apt->getExtraArea() . PHP_EOL;
            echo '- Total Area (Sq. Ft): ' . $apt->getBaseArea() + $apt->getExtraArea() . PHP_EOL;
            echo '- Number of Bedrooms: ' . $apt->getRooms() . PHP_EOL;
            if ($apt instanceof LuxuryApartment) {
                echo "- Special Amenities: \n";
                $amenities = $apt->getAmenities();
                foreach ($amenities as $key => $amenity) {
                    echo ' ' . ($key + 1) . '. ' . $amenity . PHP_EOL;
                }
                echo '- Total Apartment Price(BDT): ' . $apt->getBaseValue() + $apt->getExtraLuxuryAreaCost() + $apt->getAmenitiesCost() . PHP_EOL;
                if ($apt->isSold()) {
                    echo "- Status: Sold Out\n";
                    $owners = $apt->getOwners();
                    echo "Owner/Owners:\n";
                    foreach ($owners as $key => $owner) {
                        echo ' ' . ($key + 1) . '. ' . $owner . "\n";
                    }
                } else {
                    echo "- Status: Ready for Sale\n";
                }
            } else {
                echo '- Total Apartment Price(BDT):  ' . $apt->getBaseValue() + $apt->getExtraAreaCost() . PHP_EOL;
                if ($apt->isSold()) {
                    echo "- Status: Sold Out\n";
                    $owners = $apt->getOwners();
                    echo "Owner/Owners:\n";
                    foreach ($owners as $key => $owner) {
                        echo ' ' . ($key + 1) . '. ' . $owner . "\n";
                    }
                } else {
                    echo "- Status: Ready for Sale\n";
                }
            }
            echo "\n";
        }
    }
}

