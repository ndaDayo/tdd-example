<?php

namespace App;

class Sample
{
    public function solve(string $input): string
    {
        $len = strlen($input);

        for ($i = 0; $i < $len; $i ++) {
            if ($i % 2 === 0 && $input[$i] === 'L') {
                return 'No';
            }
            if ($i % 2 === 1 && $input[$i] === 'R') {
                return 'No';
            }
        }
        return 'Yes';
    }
}