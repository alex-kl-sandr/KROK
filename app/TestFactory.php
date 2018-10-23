<?php

namespace App;


use App\Contracts\TestFactoryInterface;

class TestFactory implements TestFactoryInterface
{
    public function make(array $testData): Test
    {
        $testBuilder = (new TestBuilder($testData['id'] ?? null))
            ->question($testData['question'] ?? null);

        foreach ($testData['answers'] ?? [] as $group => $answer) {
            $testBuilder->answer($answer, $group);
        }

        return $testBuilder->build();
    }
}