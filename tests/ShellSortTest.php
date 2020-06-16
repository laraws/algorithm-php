<?php

namespace Laraws\Alg\Tests;

use PHPUnit\Framework\TestCase;
use Laraws\Alg\Sorting\ShellSort;

class ShellSortTest extends TestCase
{
    public function testShellSort()
    {
        $a = [9, 2, 8, 2, 33, 22, 11, 8, 12, 5];
        $len = count($a);
        $gap = ceil($len / 2);
        $b = ShellSort::sort($a, $len, $gap);
        sort($a);
        $this->assertSame($a, $b);
    }
}