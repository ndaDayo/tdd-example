<?php

namespace App;

class Sample
{
    public function solve(string $input): string
    {
        $len = strlen($input);

        for ($i = 0; $i < $len; $i++) {
            $currentChar = $input[$i];
            if ($i % 2 === 0 && $currentChar === 'L' || $i % 2 === 1 && $currentChar === 'R') {
                return 'No';
            }
        }
        return 'Yes';
    }
}