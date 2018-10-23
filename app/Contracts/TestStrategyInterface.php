<?php

namespace App\Contracts;


interface TestStrategyInterface
{
    public function calculate(array $array): int;
}