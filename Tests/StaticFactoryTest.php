<?php
namespace DesignPatterns\Tests;

use DesignPatterns\StaticFactory\FormatNumber;
use DesignPatterns\StaticFactory\FormatString;
use DesignPatterns\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatter()
    {
        $object_string = 'number';
        $number_formatter = StaticFactory::factory($object_string);
        $this->assertInstanceOf(FormatNumber::class, $number_formatter);
    }

    public function testCanCreateStringFormatter()
    {
        $object_string = 'string';
        $string_formatter = StaticFactory::factory($object_string);
        $this->assertInstanceOf(FormatString::class, $string_formatter);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testException()
    {
        $string = 'hello world!';
        StaticFactory::factory($string);
    }
}
