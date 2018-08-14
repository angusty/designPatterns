<?php
namespace DesignPatterns\FactoryMethod;

class FileLoggerFactory implements LoggerFactory
{
    private $filePath;
    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function createLogger() : Logger
    {
        // TODO: Implement createLogger() method.
        return new FileLogger($this->filePath);
    }
}