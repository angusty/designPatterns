<?php
namespace DesignPatterns\Builder;

class BikeBuilder implements BuilderInterface
{
    protected $bike;
    public function createVehicle()
    {
        // TODO: Implement createVehicle() method.
        $this->bike = new Bike();
    }

    public function addWheel()
    {
        // TODO: Implement addWheel() method.
        $this->bike->setPart('WheelFront', new Wheel());
        $this->bike->setPart('wheeelBehind', new Wheel());
    }

    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->bike->setPart('bikeEngine', new Engine());
    }

    public function addDoors()
    {
        // TODO: Implement addDoors() method.
    }

    public function getVehicle() : Vehicle
    {
        // TODO: Implement getVehicle() method.
        return $this->bike;
    }

}