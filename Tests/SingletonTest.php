<?php
namespace DesignPatterns\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Singleton\Singleton;

class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $fistCall = Singleton::getInstance();
        $sendCall = Singleton::getInstance();
        $this->assertInstanceOf(Singleton::class, $fistCall);
        $this->assertSame($fistCall, $sendCall);
    }
}
