<?php

namespace Laraws\Alg\Search;

class BinarySearch
{
    public static function search($arr, $target, $begin, $end)
    {

        $mid = $begin + intval(($end - $begin) / 2);

        if ($arr[$mid] == $target) return $mid;

        if ($begin == $end) return false;

        if ($arr[$mid] > $target) return self::search($arr, $target, $begin, $mid);

        return self::search($arr, $target, $mid, $end);
    }
}