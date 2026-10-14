<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "Rio.php";

// Object 1
$item1 = new Rio();
$item1->setItemName("Notebook");
$item1->setPrice(45);

// Object 2
$item2 = new Rio();
$item2->setItemName("Ballpen");
$item2->setPrice(12);

// Object 3
$item3 = new Rio();
$item3->setItemName("Backpack");
$item3->setPrice(850);

// Display Output
echo $item1->getItemName() . " - Price: " . $item1->getPrice() . " pesos";
echo "<br><br>";

echo $item2->getItemName() . " - Price: " . $item2->getPrice() . " pesos";
echo "<br><br>";

echo $item3->getItemName() . " - Price: " . $item3->getPrice() . " pesos";

?>