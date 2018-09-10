<?php
namespace DesignPatterns\Prototype;

abstract class BookPrototype
{
    protected $title;
    protected $category;
    abstract public function __clone();
    public function getTitle() : string
    {
        return $this->title;
    }
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
}
