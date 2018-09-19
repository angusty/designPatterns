<?php
namespace DesignPatterns\Decorator;

class WIFI extends BookingDecorator
{
    const PRICE = 5;

    public function calculatePrice() : int
    {
        // TODO: Implement calculatePrice() method.
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription() : string
    {
        // TODO: Implement getDescription() method.
        return $this->booking->getDescription() . ' with WIFI';
    }
}
