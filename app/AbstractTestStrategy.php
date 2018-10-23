<?php

namespace App;


use App\Contracts\TestStrategyInterface;

abstract class AbstractTestStrategy implements TestStrategyInterface
{
    protected function getPercent(array $data): int
    {
        return round(array_sum($data) / count($data) * 100);
    }
}