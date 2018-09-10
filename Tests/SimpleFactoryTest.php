<?php
namespace DesignPatterns\Tests;

use DesignPatterns\SimpleFactory\Bicycle;
use DesignPatterns\SimpleFactory\SimpleFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateBicycle()
    {
        $factory = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf(Bicycle::class, $factory);
    }
}