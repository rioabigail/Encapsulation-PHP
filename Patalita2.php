<?php

include "Rio2.php";

$laptop1 = new Rio2();
$laptop1->setLaptop("Acer", "Vivobook 2026", 77000);

$laptop2 = new Rio2();
$laptop2->setLaptop("MSI", "UltraVes 2026", 68000);

$laptop3 = new Rio2();
$laptop3->setLaptop("HP", "HyperOS 2026", 72000);

echo $laptop1->getBrand() . " Laptop: ";
echo $laptop1->getModel();
echo " = ";
echo $laptop1->getPrice();

echo "<br><br>";

echo $laptop2->getBrand() . " Laptop: ";
echo $laptop2->getModel();
echo " = ";
echo $laptop2->getPrice();

echo "<br><br>";

echo $laptop3->getBrand() . " Laptop: ";
echo $laptop3->getModel();
echo " = ";
echo $laptop3->getPrice();

?>