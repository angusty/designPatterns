<?php
namespace DesignPatterns\Tests;

use DesignPatterns\DataMapper\StorageAdapter;
use DesignPatterns\DataMapper\User;
use DesignPatterns\DataMapper\UserMapper;
use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

class DataMapperTest extends TestCase
{
    public function testCanMapUserFromStorage()
    {
        $data = [1 => ['username' => 'domnikl', 'email' => 'domnikl@163.com']];
        $storage = new StorageAdapter($data);
        $mapper = new UserMapper($storage);
        $user = $mapper->findById(1);
        $this->assertInstanceOf(User::class, $user);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testWillNotMapInvalidData()
    {
        $storage = new StorageAdapter([]);
        $mapper = new UserMapper($storage);
        $mapper->findById(1);
    }
}
