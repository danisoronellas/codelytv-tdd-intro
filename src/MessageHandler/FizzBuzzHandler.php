<?php

declare(strict_types=1);

namespace App\MessageHandler;

use App\Message\FizzBuzz;

final class FizzBuzzHandler
{
    public function __invoke(FizzBuzz $command): int|string
    {
        if (($command->number % 3 === 0) && ($command->number % 5 === 0)) {
            return 'fizzbuzz';
        } elseif ($command->number % 3 === 0) {
            return 'fizz';
        } elseif ($command->number % 5 === 0) {
            return 'buzz';
        }
        return $command->number;
    }
}