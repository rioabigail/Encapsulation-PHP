<?php

include "Rio1.php";

$calc1 = new Rio1();
$calc1->setNumbers(5,10);

$calc2 = new Rio1();
$calc2->setNumbers(20,30);

$calc3 = new Rio1();
$calc3->setNumbers(7,8);

echo $calc1->getNum1() . " + " . $calc1->getNum2() . " = " . $calc1->add();
echo "<br>";

echo $calc2->getNum1() . " + " . $calc2->getNum2() . " = " . $calc2->add();
echo "<br>";

echo $calc3->getNum1() . " + " . $calc3->getNum2() . " = " . $calc3->add();

?>