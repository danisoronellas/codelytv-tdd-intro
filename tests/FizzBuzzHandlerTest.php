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
    public function GivenAnyNumberThenShouldReturnTheSameNumber(): void
    {
        $number = 1;
        $handler = new FizzBuzzHandler();
        $command = new FizzBuzz($number);

        $this->assertEquals($number, $handler($command));
    }

    #[Test]
    public function GivenAnyNumberMultipleByThreeThenShouldReturnFizz(): void
    {
        $number = 3;
        $handler = new FizzBuzzHandler();
        $command = new FizzBuzz($number);
        $this->assertEquals('fizz', $handler($command));
    }

    #[Test]
    public function GivenAnyNumberMultipleByFiveThenShouldReturnBuzz(): void
    {
        $number = 5;
        $handler = new FizzBuzzHandler();
        $command = new FizzBuzz($number);
        $this->assertEquals('buzz', $handler($command));
    }

    #[Test]
    public function GivenAnyNumberMultipleByThreeAndFiveThenShouldReturnFizzBuzz(): void
    {
        $number = 15;
        $handler = new FizzBuzzHandler();
        $command = new FizzBuzz($number);
        $this->assertEquals('fizzbuzz', $handler($command));
    }

}