<?php
namespace DesignPatterns\Tests;

use DesignPatterns\Decorator\DoubleRoomBooking;
use DesignPatterns\Decorator\ExtraBed;
use DesignPatterns\Decorator\WIFI;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testCanCalculatePriceForBasicDoubleRoomBooking()
    {
        $booking = new DoubleRoomBooking();
        $price = $booking->calculatePrice();
        $this->assertEquals(40, $price);
        $description = $booking->getDescription();
        $this->assertEquals('double room', $description);
    }

    public function testCanCalculatePriceForDoubleRoomBookingWithWifi()
    {
        $booking = new DoubleRoomBooking();
        $booking = new WIFI($booking);
        $price = $booking->calculatePrice();
        $this->assertEquals(45, $price);
        $description = $booking->getDescription();
        $this->assertEquals('double room with WIFI', $description);
    }

    public function testCanCalculatePriceForDoubleRoomBookingWithExtraBed()
    {
        $booking = new DoubleRoomBooking();
        $booking = new ExtraBed($booking);
        $price = $booking->calculatePrice();
        $this->assertEquals(70, $price);
        $description = $booking->getDescription();
        $this->assertEquals('double room with extra bed', $description);
    }

    public function testCanCalculatePriceForDoubleRoomBookingWithWifAndExtraBed()
    {
        $booking = new DoubleRoomBooking();
        $booking = new WIFI($booking);
        $booking = new ExtraBed($booking);
        $price = $booking->calculatePrice();
        $this->assertEquals(75, $price);
        $description = $booking->getDescription();
        $this->assertEquals('double room with WIFI with extra bed', $description);
    }
}
