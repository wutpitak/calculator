<?php

namespace wutpitak\Calculator;

class Calculator
{
    public function add($first_number, $second_number)
    {
        return $first_number + $second_number;
    }

    public function substract($first_number, $second_number)
    {
        return $first_number - $second_number;
    }

    public function multiply($first_number, $second_number)
    {
        return $first_number * $second_number;
    }

    public function divide($first_number, $second_number)
    {
        return $first_number / $second_number;
    }
}