<?php

namespace App\Contracts;


use App\Test;

interface TestFactoryInterface
{
    public function make(array $data): Test;
}