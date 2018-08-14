<?php
namespace DesignPatterns\Tests;

use DesignPatterns\FactoryMethod\FileLogger;
use DesignPatterns\FactoryMethod\FileLoggerFactory;
use DesignPatterns\FactoryMethod\StdoutLogger;
use DesignPatterns\FactoryMethod\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateStdoutLogging()
    {
        $factory = new StdoutLoggerFactory();
        $stdout_logger = $factory->createLogger();
        $this->assertInstanceOf(StdoutLogger::class, $stdout_logger);
    }

    public function testCanCreateFileLogging()
    {
//        sys_get_temp_dir();
        $file_path = __DIR__ . '/filelogger.txt';
        $factory = new FileLoggerFactory($file_path);
        $file_logger = $factory->createLogger();
        $this->assertInstanceOf(FileLogger::class, $file_logger);
    }

    public function testFileLogging()
    {
        $file_path = __DIR__ . '/filelogger.txt';
        $factory = new FileLoggerFactory($file_path);
        $file_loger = $factory->createLogger();
        $file_loger->log('大家好');
    }
}