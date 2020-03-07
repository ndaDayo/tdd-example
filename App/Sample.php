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
        return 'Yes';
    }
}