<?php

namespace App;

class Sample
{
    public function solve(string $input): string
    {
        $len = strlen($input);

        for ($i = 0; $i < $len; $i++) {
            $currentChar = $input[$i];
            if ($this->isOddCharL($i, $currentChar) || $this->isEvenCharL($i, $currentChar)) {
                return 'No';
            }
        }
        return 'Yes';
    }

    private function isOddCharL($index, $currentChar): bool
    {
        return $index % 2 === 0 && $currentChar === 'L';
    }

    private function isEvenCharL($index, $currentChar): bool
    {
        return $index % 2 === 1 && $currentChar === 'R';
    }
}