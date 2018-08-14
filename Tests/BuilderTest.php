<?php
namespace DesignPatterns\Tests;

use DesignPatterns\Builder\Bike;
use DesignPatterns\Builder\BikeBuilder;
use DesignPatterns\Builder\Car;
use DesignPatterns\Builder\CarBuilder;
use DesignPatterns\Builder\Director;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testCanBuildBike()
    {
        $bikeBuilder = new BikeBuilder();
        $newVehicle = (new Director())->build($bikeBuilder);
        $this->assertInstanceOf(Bike::class, $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);
        $this->assertInstanceOf(Car::class, $newVehicle);
    }

}