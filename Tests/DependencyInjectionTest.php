<?php
namespace DesignPatterns\Tests;

use DesignPatterns\DependencyInjection\DatabaseConfiguration;
use DesignPatterns\DependencyInjection\DatabaseConnection;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'yboker', '12345678');
        $connection = new DatabaseConnection($config);
        $this->assertEquals('yboker:12345678@localhost:3306', $connection->getDsn());
    }
}

