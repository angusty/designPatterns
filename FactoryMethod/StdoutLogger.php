<?php
namespace DesignPatterns\FactoryMethod;

class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        // TODO: Implement log() method.
        return $message . PHP_EOL;
    }
}
