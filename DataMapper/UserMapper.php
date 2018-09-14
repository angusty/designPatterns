<?php
namespace DesignPatterns\DataMapper;

use InvalidArgumentException;

class UserMapper
{
    private $adapter;

    public function __construct(StorageAdapter $adapter)
    {
        $this->adapter = $adapter;
    }

    public function findById(int $id) : User
    {
        $result = $this->adapter->find($id);
        if (null === $result) {
            throw new InvalidArgumentException("User #{$id} not found!");
        }
        return $this->mapRowToUser($result);
    }

    public function mapRowToUser($row) : User
    {
        return User::fromState($row);
    }
}
