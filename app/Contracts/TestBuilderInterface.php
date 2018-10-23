<?php

namespace App\Contracts;


interface TestBuilderInterface
{
    public function getId(): int;

    public function getQuestion(): string;

    public function getAnswers(): array;
}