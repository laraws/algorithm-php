<?php

namespace Laraws\Alg\Sorting;

class QuickSort
{
    public static function sort(array $a): array
    {
        $len = count($a);
        if ($len <=1) return $a;
        $left = [];
        $right = [];
        for ($i = 1; $i < $len; $i++) {
            if ($a[0] >= $a[$i]) {
                $left[] = $a[$i];
            } else {
                $right[] = $a[$i];
            }
        }

        return array_merge(self::sort($left), [$a[0]], self::sort($right));
        
    }
}