<?php

namespace App;


class CookStrategy extends AbstractTestStrategy
{
    public function calculate(array $testResultData): int
    {
        // Для простоты допустим, что ответы с номером 1 относятся к повору,
        // все другие варианты к повору не имеют отношения
        $result = array_map(function ($val) {
            return $val == Test::COOK ? 1 : 0;
        }, $testResultData);

        return $this->getPercent($result);
    }
}