<?php
namespace DesignPatterns\Multiton;

class Multiton
{
    public const INSTANCE_1 = '1';
    public const INSTANCE_2 = '2';
    private static $instance = [];
    private function __construct()
    {
    }

    public static function getInstance(string $instanceName) : Multiton
    {
        if (!isset(self::$instance[$instanceName])) {
            self::$instance[$instanceName] = new self();
        }
        return self::$instance[$instanceName];
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