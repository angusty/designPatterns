<?php
namespace DesignPatterns\Facade;

interface OsInterface
{
    public function halt();
    public function getName() : string;
}
