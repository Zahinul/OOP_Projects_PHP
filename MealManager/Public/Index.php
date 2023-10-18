<?php
use App\Classes\AdvancedMeal;
use App\Classes\BasicMeal;

include 'autoloader.php';

$charge = 0;
$meal1 = new BasicMeal('Lunch', '12/10/23');
$meal1->setConsumer('Azmain');
$meal1->changeStatus();
$meal2 = new AdvancedMeal('Supper', '13/10/23', 'egg fried rice,chillie chicken,chinese veg');
$meal2->setConsumer('Adeeb');
$meal2->addGuest('Sakib');
$meal2->addGuest('Nadim');
//$guests = $meal2->getGuests();
$meal3= new BasicMeal('Breakfast','13/10/23');
$meal3->setConsumer('Mithila');
$meal4 = new AdvancedMeal('Lunch','14/10/23', 'Kacchi Biriyani,Chicken Roast,Borhani');
$meal4->setConsumer('Adnan');
$meals = [$meal1, $meal2,$meal3,$meal4];
foreach ($meals as $meal) {
    if($meal instanceof AdvancedMeal){
        echo "Meal(Advanced) Serial: " . $meal->getSerial().PHP_EOL;
        $guests = $meal->getGuests();
    }else{
        echo "Meal(Basic) Serial: " . $meal->getSerial() . PHP_EOL;
    }
    
    echo "Date: " . $meal->getDate() . PHP_EOL;
    echo "Consumer: " . $meal->getConsumer() . PHP_EOL;
    echo "Meal Type: " . $meal->getDescription() . PHP_EOL;
    if ($meal instanceof AdvancedMeal) {
        echo "Special Menu: " . PHP_EOL;
        $menu = $meal->getMenu();
        //var_dump($menu);
        foreach ($menu as $key => $item) {
            //var_dump($key);
            //var_dump($item);
            echo "Item " . $key+1 . " : " . $item . PHP_EOL;
        }
        if (count($guests) != 0) {
            $guestCount = count($guests);
            $eCharge = $meal->extraCharge();
            $charge = $meal->getCharge() + $guestCount * $eCharge;
            echo "No. of Guests: " . $guestCount . PHP_EOL;
            echo "Guest List: ".PHP_EOL;
            foreach($guests as $key=>$guest){
                echo $key+1 . " : ".$guest.PHP_EOL;
            }
            echo "Total Meal Charge: BDT " . $charge . PHP_EOL;
        } else {
            echo "Total Meal Charge: BDT " . $meal->getCharge() . PHP_EOL;
        }
    } else {
        echo "Total Meal Charge: BDT " . $meal->getCharge() . PHP_EOL;
    }
    if ($meal->isTaken()) {
        echo "Meal is taken.\n\n";
    } else {
        echo "Meal is yet to be taken.\n\n";
    }
}
?>