<?php
namespace DesignPatterns\Decorator;

class ExtraBed extends BookingDecorator
{
    const PRICE = 30;

    public function calculatePrice() : int
    {
        // TODO: Implement calculatePrice() method.
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription() : string
    {
        // TODO: Implement getDescription() method.
        return $this->booking->getDescription() . ' with extra bed';
    }
}
