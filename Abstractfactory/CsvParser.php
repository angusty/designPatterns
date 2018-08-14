<?php
namespace DesignPatterns\AbstractFactory;

class CsvParser implements Parser
{
    private $skipHeaderLine;
    const OPTION_CONTAINS_HEADER = true;
    const OPTION_CONTAINS_NO_HEADER = false;

    public function __construct(bool $skipHeaderLine)
    {
        $this->skipHeaderLine = $skipHeaderLine;
    }

    public function parse(string $input) : array
    {
        // TODO: Implement parse() method.
        $headerWasParsed = false;
        $parsedLines = [];
        foreach (explode(PHP_EOL, $input) as $line) {
            if (!$headerWasParsed && $this->skipHeaderLine === self::OPTION_CONTAINS_HEADER) {
                continue;
            }
            $parsedLines[] = str_getcsv($line);
        }
        return $parsedLines;
    }

}