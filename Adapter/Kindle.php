<?php
namespace DesignPatterns\Adapter;

class Kindle implements EbookInterface
{
    private $totalPages = 100;
    private $page = 1;
    public function unlock()
    {
        // TODO: Implement unlock() method.
        $this->page = 1;
        return 'unlock';
    }

    public function pressNext()
    {
        // TODO: Implement pressNext() method.
        $this->page++;
    }

    public function getPage() : array
    {
        // TODO: Implement getPage() method.
        return [$this->page, $this->totalPages];
    }

}