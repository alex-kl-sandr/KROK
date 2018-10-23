<?php

namespace App;


use App\Contracts\TestStrategyInterface;

class Tester
{
    /**
     * @var TestStrategyInterface
     */
    private $strategy;

    public function setStrategy(TestStrategyInterface $strategy): self
    {
        $this->strategy = $strategy;

        return $this;
    }

    public function getTestResult($testResultData)
    {
        return $this->strategy->calculate($testResultData);
    }
}