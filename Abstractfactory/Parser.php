<?php
namespace DesignPatterns\AbstractFactory;

interface Parser
{
    public function parse(string $input):array;
}