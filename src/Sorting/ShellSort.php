<?php

namespace Laraws\Alg\Sorting;

class ShellSort
{
    public static function sort(array $arr, int $len, int $gap): array
    {
        if ($gap == 0) return $arr;
        for ($i = 0; $i < $len; $i++) {
            if (($i + $gap) > $len - 1) break;
            if ($arr[$i] > $arr[$i + $gap]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$i + $gap];
                $arr[$i + $gap] = $temp;
            }
        }
        // notice: gap should be 细, 否则无法正确排序
        $gap = $gap / 2;
        if ($gap < 1) return $arr;
        $gap = intval(ceil($gap));
        return self::sort($arr, $len, $gap);

    }
}