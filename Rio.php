<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Rio
{
    private $itemName;
    private $price;

    // Setter for item name
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;
    }

    // Setter for price
    public function setPrice($price)
    {
        $this->price = $price;
    }

    // Getter for item name
    public function getItemName()
    {
        return $this->itemName;
    }

    // Getter for price
    public function getPrice()
    {
        return $this->price;
    }
}

?>