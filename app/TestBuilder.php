<?php

namespace App;


use App\Contracts\TestBuilderInterface;

class TestBuilder implements TestBuilderInterface
{
    private $id = null;
    private $question = null;
    private $answers = [];

    public function __construct(int $id = null)
    {
        $this->id = $id;
    }

    public function question(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function answer(string $answer, int $group = 0): self
    {
        $this->answers[$group] = $answer;

        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getQuestion(): string
    {
        return $this->question;
    }

    public function getAnswers(): array
    {
        return $this->answers;
    }

    public function build(): Test
    {
        return new Test($this);
    }
}