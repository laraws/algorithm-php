<?php

namespace Laraws\Alg\Sorting;

class MergeSort
{
    public static function compare(array $a)
    {
        echo 1;
        $len = count($a);
        $gap = $len / 2; // divide to left and right
        for ($i = 1; $i < $gap; $i += 2) {
            if ($a[$i] < $a[$i - 1]) {
                self::swap($a, $i, $i - 1);
            }
        }
        $b = [];
        $c = array_slice($a, 0, $gap);

        $b = self::merge($c, $gap, 4);


        for ($j = $gap + 1; $j < $len - 1; $j += 2) {
            if ($a[$j] < $a[$j - 1]) {
                self::swap($a, $j, $j - 1);
            }
        }
        $e = [];
        $d = array_slice($a, $gap);
        $e = self::merge($d, $len - $gap, 4);
        $f = array_merge($b, $e);
        $g = [];
        self::merge($f, $g, count($f), $gap);


    }

    public static function merge(array $a, int $len, int $div)
    {
        $number = $div / 2;
        for ($j = 0; isset($a[$j]); $j += 4) {
            $number += $j;
            $i = $j;
            $rightKey = $i + $number;
            while (true) {
                if ($i >= $number || !isset($a[$i])) break;
                if ($rightKey >= $div) {
                    $b[] = $a[$i];
                    $i++;
                } else {
                    if ($a[$i] < $a[$rightKey]) {
                        $b[] = $a[$i];
                        $i++;
                    } else {
                        $b[] = $a[$rightKey];
                        $rightKey++;
                    }
                }

            }
        }
        self::merge($b, $len, 2*$div);

    }

    public static function swap(array &$a, int $i, int $j): void
    {
        $t = $a[$i];
        $a[$i] = $a[$j];
        $a[$j] = $t;

    }
}