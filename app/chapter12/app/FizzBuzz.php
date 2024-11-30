<?php

namespace App;

class FizzBuzz
{
    public function execute(int $number): string
    {
        if ($number % 3 === 0) {
            if ($number % 5 === 0) {
                return 'FizzBuzz';
            }
            return 'Fizz';
        }
        if ($number % 5 === 0) {
            return 'Buzz';
        }
        return (string) $number;
    }
}
