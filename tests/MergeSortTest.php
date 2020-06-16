<?php declare(strict_types=1);
namespace Laraws\Alg\Tests;

use Laraws\Alg\Sorting\MergeSort;
use PHPUnit\Framework\TestCase;

class MergeSortTest extends TestCase
{
    public function testMergeSort()
    {
       $a = [9, 2, 8, 2, 33, 22, 11, 8, 12, 5];
       $b = MergeSort::compare($a);
       $this->assertSame($a, $b);
    }

}