<?php

namespace App;

use App\Contracts\TestBuilderInterface;
use App\Contracts\TestInterface;

class Test implements TestInterface
{
    const COOK = 1;
    const FOODIE = 2;

    protected $id;
    protected $question;
    protected $answers;

    public function __construct(TestBuilderInterface $testBuilder)
    {
        $this->question = $testBuilder->getQuestion();
        $this->answers = $testBuilder->getAnswers();
        $this->id = $testBuilder->getId();
    }

    public function getTestData(): array
    {
        return [
            'question' => $this->question,
            'answers'  => $this->answers
        ];
    }
}