<?php

class Rio1
{
    private $num1;
    private $num2;

    public function setNumbers($a, $b)
    {
        $this->num1 = $a;
        $this->num2 = $b;
    }

    public function getNum1()
    {
        return $this->num1;
    }

    public function getNum2()
    {
        return $this->num2;
    }

    public function add()
    {
        return $this->num1 + $this->num2;
    }
}

?>