<?php

namespace App;


class FoodieStrategy extends AbstractTestStrategy
{
    public function calculate(array $testResultData): int
    {
        // Для простоты допустим, что ответы с номером 2 относятся к гурману,
        // все другие варианты к гурману не имеют отношения
        $result = array_map(function ($val) {
            return $val == Test::FOODIE ? 1 : 0;
        }, $testResultData);

        return $this->getPercent($result);
    }
}