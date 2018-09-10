<?php
namespace DesignPatterns\Prototype;

class BarBookPrototype extends BookPrototype
{
    protected $category = 'Bar';
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

}
