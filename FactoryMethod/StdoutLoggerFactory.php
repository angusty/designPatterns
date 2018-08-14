<?php
namespace DesignPatterns\FactoryMethod;

class StdoutLoggerFactory implements LoggerFactory
{
    public function createLogger() : Logger
    {
        // TODO: Implement createLogger() method.
        return new StdoutLogger();
    }
}