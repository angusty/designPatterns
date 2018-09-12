<?php
namespace DesignPatterns\Tests;

use DesignPatterns\Bridge\HelloWorldService;
use DesignPatterns\Bridge\HtmlFormatter;
use DesignPatterns\Bridge\PlainTextFormatter;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testCanPrintUsingThePlainTextPrinter()
    {
        $text_object = new PlainTextFormatter();
        $service = new HelloWorldService($text_object);
        $text = $service->get();
        $this->assertEquals('Hello World', $text);

        $html_object = new HtmlFormatter();
        $service = new HelloWorldService($html_object);
        $text = $service->get();
        $this->assertEquals('<p>Hello World</p>', $text);
    }
}
