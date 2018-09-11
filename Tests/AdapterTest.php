<?php
namespace DesignPatterns\Tests;

use DesignPatterns\Adapter\Book;
use DesignPatterns\Adapter\EbookAdapter;
use DesignPatterns\Adapter\Kindle;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new Book();
        $book->open();
        $book->turnPage();
        $this->assertEquals(2, $book->getPage());
    }

    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        $kindle = new Kindle();
        $book = new  EbookAdapter($kindle);
        $book->open();
        $book->turnPage();
        $this->assertEquals(2, $book->getPage());
    }
}
