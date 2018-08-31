<?php
namespace DesignPatterns\Singleton;

class Singleton
{
    private static $instance = null;
    private function __construct()
    {
    }
    public static function getInstance() : Singleton
    {
        if (null === self::$instance) {
            self::$instance = new static();
        }
        return self::$instance;
    }
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}
