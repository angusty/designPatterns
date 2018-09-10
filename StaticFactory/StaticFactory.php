<?php
namespace DesignPatterns\StaticFactory;

use InvalidArgumentException;

final class StaticFactory
{
    public static function factory(string $type) : FormatterInterface
    {
        $factory = null;
        switch ($type) {
            case 'number':
                $factory = new FormatNumber();
                break;
            case 'string':
                $factory = new FormatString();
                break;
            default:
                throw new InvalidArgumentException('Unknow format given');
        }
        return $factory;
    }
}
