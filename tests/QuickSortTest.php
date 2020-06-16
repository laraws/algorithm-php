<?php declare(strict_types=1);

namespace Laraws\Alg\Tests;

use Laraws\Alg\Sorting\QuickSort;
use PHPUnit\Framework\TestCase;

class QuickSortTest extends TestCase
{
    public function testMergeSort()
    {
        $a = [9, 2, 8, 2, 33, 22, 11, 8, 12, 5];
        $b = QuickSort::sort($a);
        sort($a);
        $this->assertSame($a, $b);
    }

}