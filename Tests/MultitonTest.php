<?php
namespace DesignPatterns\Tests;

use DesignPatterns\Multiton\Multiton;
use PHPUnit\Framework\TestCase;

class MultitonTest extends TestCase
{
    public function testCanCreateInstance()
    {
        $name = Multiton::INSTANCE_1;
        $object_1 = Multiton::getInstance($name);
        $name = Multiton::INSTANCE_2;
        $object_2 = Multiton::getInstance($name);
        $this->assertInstanceOf(Multiton::class, $object_1);
        $this->assertInstanceOf(Multiton::class, $object_2);
    }
}