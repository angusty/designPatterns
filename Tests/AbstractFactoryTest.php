<?php
namespace DesignPatterns\Tests;

//require_once dirname(__DIR__) . '/vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use DesignPatterns\AbstractFactory\CsvParser;
use DesignPatterns\AbstractFactory\JsonParser;
use DesignPatterns\AbstractFactory\ParserFactory;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateCsvParser()
    {
        $factory = new ParserFactory();
        $parser = $factory->createCsvParserr(CsvParser::OPTION_CONTAINS_HEADER);
        $this->assertInstanceOf(CsvParser::class, $parser);
    }

    public function testCanCreateJsonParser()
    {
        $factory = new ParserFactory();
        $parser = $factory->createJsonParser();
        $this->assertInstanceOf(JsonParser::class, $parser);
    }
}
