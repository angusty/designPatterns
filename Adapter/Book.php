<?php
namespace DesignPatterns\Adapter;

class Book implements BookInterface
{
    private $page = 1;
    public function turnPage()
    {
        // TODO: Implement turnPage() method.
        $this->page++;
    }

    public function open()
    {
        // TODO: Implement opein() method.
        $this->page = 1;
    }

    public function getPage() : int
    {
        // TODO: Implement getPage() method.
        return $this->page;
    }

}
