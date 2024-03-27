<?php

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    protected FizzBuzz $fizzBuzz;

    public function setUp(): void
    {
        $this->fizzBuzz = new FizzBuzz(1, 100);
    }


    public function testFizzBuzzWhenDividedBy3()
    {

        $this->assertEquals(PHP_EOL . 'Fizz', $this->fizzBuzz->performFizzBuzz(3));

    }

    public function testFizzBuzzWhenDividedBy5()
    {
        $this->assertEquals(PHP_EOL . 'Buzz', $this->fizzBuzz->performFizzBuzz(5));

    }

    public function testFizzBuzzWhenDividedBy3And5()
    {
        $this->assertEquals(FizzBuzz::PHP_SPACER . 'FizzBuzz' . FizzBuzz::PHP_SPACER, $this->fizzBuzz->performFizzBuzz(15));
    }

    public function testFizzBuzzWhenNotDividedBy3And5()
    {
        $this->assertEquals(PHP_EOL . '7', $this->fizzBuzz->performFizzBuzz(7));
    }

    public function testFizzBuzzNoEOLCases()
    {
        $this->assertEquals('1', $this->fizzBuzz->performFizzBuzz(1));
        $this->assertEquals('31', $this->fizzBuzz->performFizzBuzz(31));
    }

}