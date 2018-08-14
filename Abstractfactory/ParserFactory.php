<?php
namespace DesignPatterns\AbstractFactory;

class ParserFactory
{
    public function createCsvParserr($skipHeaderLine) : CsvParser
    {
        $cscParser = new CsvParser($skipHeaderLine);
        return $cscParser;
    }

    public function createJsonParser() : JsonParser
    {
        $jsonParser = new JsonParser();
        return $jsonParser;
    }
}
