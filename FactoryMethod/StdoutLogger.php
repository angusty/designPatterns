<?php
namespace DesignPatterns\FactoryMethod;

class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        // TODO: Implement log() method.
        echo $message, PHP_EOL;
    }
}
