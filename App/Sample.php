<?php

namespace App;

class Sample
{
    public function solve(string $input): string
    {
        $len = strlen($input);

        for ($i = 0; $i < $len; $i += 2) {
            if ($input[$i] === 'L') {
                return 'No';
            }
        }

        for ($i = 1; $i < $len; $i += 2) {
            if ($input[$i] === 'R') {
                return 'No';
            }
        }
        return 'Yes';
    }
}