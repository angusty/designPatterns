<?php
namespace DesignPatterns\Tests;

use DesignPatterns\Facade\Facade;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testComputerOn()
    {
        $os = $this->createMock('DesignPatterns\Facade\OsInterface');
        $os->method('getName')
            ->with($this->returnValue('Linux'));
        $bios = $this->getMockBuilder('DesignPatterns\Facade\BiosInterface')
            ->setMethods(['launch', 'execute', 'waitForKeyPress'])
            ->disableAutoload()
            ->getMock();
        $bios->expects($this->once())
            ->method('launch')
            ->with($os);
        $facade = new Facade($bios, $os);
        $facade->turnOn();
        $this->assertSame('Linux', $os->getName());
    }
}
