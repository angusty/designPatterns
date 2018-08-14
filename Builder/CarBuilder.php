<?php
namespace DesignPatterns\Builder;

class CarBuilder implements BuilderInterface
{
    protected $car;

    public function createVehicle()
    {
        // TODO: Implement createVehicle() method.
        $this->car = new Car();
    }

    public function addWheel()
    {
        // TODO: Implement addWheel() method.
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }

    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->car->setPart('carEngine', new Engine());
    }

    public function addDoors()
    {
        // TODO: Implement addDoors() method.
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('trunkLid', new Door());
    }

    public function getVehicle() : Vehicle
    {
        // TODO: Implement getVehicle() method.
        return $this->car;
    }

}
