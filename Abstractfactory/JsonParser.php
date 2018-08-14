<?php
namespace DesignPatterns\AbstractFactory;

class JsonParser implements Parser
{
    public function parse(string $input) : array
    {
        return json_decode($input, true);
    }
}
