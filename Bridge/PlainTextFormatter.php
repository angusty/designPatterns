<?php
namespace DesignPatterns\Bridge;

class PlainTextFormatter implements FormatterInterface
{
    public function format(string $text)
    {
        // TODO: Implement format() method.
        return $text;
    }

}
