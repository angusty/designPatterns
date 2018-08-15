<?php
namespace DesignPatterns\FactoryMethod;

class FileLogger implements Logger
{
    private $filePath;
    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function log(string $message)
    {
        // TODO: Implement log() method.
        return file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}
