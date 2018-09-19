<?php
namespace DesignPatterns\Decorator;

class DoubleRoomBooking implements Booking
{
    public function calculatePrice() : int
    {
        // TODO: Implement calculatePrice() method.
        return 40;
    }

    public function getDescription() : string
    {
        // TODO: Implement getDescription() method.
        return 'double room';
    }
}
