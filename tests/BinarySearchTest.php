<?php

namespace Laraws\Alg\Tests;

use PHPUnit\Framework\TestCase;
use Laraws\Alg\Search\BinarySearch;

class BinarySearchTest extends TestCase
{
    public function testBinarySearch()
    {
        $a = [1, 2, 6, 8, 10, 12, 14, 18, 21, 33, 35, 39, 42, 47, 52, 55];
        $target = 0;
        $len = count($a);
        $trueKey = array_search($target, $a);
        $returnKey = BinarySearch::search($a, $target, 0, $len - 1);
        $this->assertSame($trueKey, $returnKey);
    }
}