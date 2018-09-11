<?php
namespace DesignPatterns\Adapter;

class EbookAdapter implements BookInterface
{
    protected $eBook;
    public function __construct(EbookInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    public function turnPage()
    {
        // TODO: Implement turnPage() method.
        $this->eBook->pressNext();
    }

    public function open()
    {
        // TODO: Implement opein() method.
        $this->eBook->unlock();
    }

    public function getPage() : int
    {
        // TODO: Implement getPage() method.
        return $this->eBook->getPage()[0];
    }

}