<?php
namespace DesignPatterns\FactoryMethod;

interface LoggerFactory
{
    public function createLogger() : Logger;
}