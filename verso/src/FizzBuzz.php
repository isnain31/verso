<?php

namespace App;

class FizzBuzz
{
    const PHP_SPACER = ' ';

    public function __construct(private int $min, private int $max)
    {

    }

    public function performFizzBuzz(int $number): string
    {
        $eol = ($number - 1) % 15 === 0 ? '' : PHP_EOL;

        $return = $eol . $number;

        if ($number % 15 === 0) {
            $return = self::PHP_SPACER . 'FizzBuzz' . self::PHP_SPACER;
        } elseif ($number % 3 === 0) {
            $return = $eol . 'Fizz';
        } elseif ($number % 5 === 0) {
            $return = $eol . 'Buzz';
        }

        return $return;
    }


    public function run(): void
    {
        for ($i = $this->min; $i <= $this->max; $i++) {
            echo $this->performFizzBuzz($i);
        }
    }
}