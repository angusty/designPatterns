<?php
namespace DesignPatterns\Adapter;

interface EbookInterface
{
    public function unlock();
    public function pressNext();
    public function getPage() : array;
}