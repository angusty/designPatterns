<?php
namespace DesignPatterns\Tests;

use DesignPatterns\Pool\WorkerPool;
use PHPUnit\Framework\TestCase;

class PoolTest extends TestCase
{
    public function testCanGetNewInstancesWithGet()
    {
        $pool = new WorkerPool();
        $work1 = $pool->get();
        $work2 = $pool->get();
        $this->assertCount(2, $pool);
        $this->assertNotSame($work1, $work2);
    }

    public function testCanGetSameInstanceTwiceWhenDisposingItFirst()
    {
        $pool = new WorkerPool();
        $work1 = $pool->get();
        $pool->dispose($work1);
        $work2 = $pool->get();
        $this->assertCount(1, $pool);
        $this->assertSame($work1, $work2);
    }
}
