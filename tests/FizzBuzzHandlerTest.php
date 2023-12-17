<?php

declare(strict_types=1);

namespace App\Tests;

use App\Message\FizzBuzz;
use App\MessageHandler\FizzBuzzHandler;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class FizzBuzzHandlerTest extends TestCase
{
    #[Test]
    public function given_any_number_then_should_return_the_same_number(): void
    {
        $number = 1;
        $handler = new FizzBuzzHandler();
        $command = new FizzBuzz($number);

        $this->assertEquals($number, $handler($command));
    }

    #[Test]
    public function given_any_number_multiple_by_three_then_should_return_fizz(): void
    {
        $number = 3;
        $handler = new FizzBuzzHandler();
        $command = new FizzBuzz($number);
        $this->assertEquals('fizz', $handler($command));
    }

    #[Test]
    public function given_any_number_multiple_by_five_then_should_return_buzz(): void
    {
        $number = 5;
        $handler = new FizzBuzzHandler();
        $command = new FizzBuzz($number);
        $this->assertEquals('buzz', $handler($command));
    }

    #[Test]
    public function given_any_number_multiple_by_three_and_five_then_should_return_fizz_buzz(): void
    {
        $number = 15;
        $handler = new FizzBuzzHandler();
        $command = new FizzBuzz($number);
        $this->assertEquals('fizzbuzz', $handler($command));
    }

}