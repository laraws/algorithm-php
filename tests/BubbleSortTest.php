<?php
namespace Laraws\Alg\Tests;

use Laraws\Alg\Sorting\BubbleSort;
use PHPUnit\Framework\TestCase;

class BubbleSortTest extends TestCase
{
    public function testBubbleSort()
    {
        $a = [9, 2, 8, 2, 33, 22, 11, 8, 12, 5];
        $b = BubbleSort::sort($a);
        sort($a);
        $this->assertSame($a, $b);
    }
}