<?php
namespace DesignPatterns\SimpleFactory;

class Bicycle
{
    public function driveTo(string $destination) : string
    {
        return $destination;
    }
}
