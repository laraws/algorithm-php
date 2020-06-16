<?php

namespace Laraws\Alg\Sorting;

class BubbleSort
{
    static function sort(array $a): array
    {
        $count = count($a);
        for ($i = 0; $i < $count; $i++) {
            for ($j = 0; $j < $count - $i - 1; $j++) {
                if ($a[$j] > $a[$j + 1]) {
                    $temp = $a[$j];
                    $a[$j] = $a[$j + 1];
                    $a[$j + 1] = $temp;
                }
            }
        }
        return $a;
    }

}