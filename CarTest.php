<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class CarTest extends TestCase
{
    public function testVolvoCreatedFromValidCar(): void
    {
        $Car = new Volvo();
        $this->assertInstanceOf(Volvo::class, $Car);
    }
    public function testFordCreatedFromValidCar(): void
    {
        $Car = new Ford();
        $this->assertInstanceOf(Ford::class, $Car);
    }
    public function testCarHasWheels() : void

    {
    $this->assertClassHasAttribute('wheels', Car::class);
    }
    public function testCarAccelerate() : void
    {
        $this->assertTrue(
        method_exists(Car:: class, 'accelerate')
        );
    }
    public function testCarDecelerate() : void
    {
        $this->assertTrue(
        method_exists(Car:: class, 'decelerate')
        );
    }
    public function testVolvoAccelerate () : void
    {
        $Volvo = new Volvo[];
        $this->assertEquals(1, $Volvo->Accelerate());
    }
    public function testFordAccelerate () : void
    {
        $Ford = new Ford[];
        $this->assertEquals(1, $Ford->Accelerate());
    }
    public function testVolvodecelerate() : void
    {
        $Volvo = new Volvo[];
        $this->assertEquals(1, $Volvo->decelerate());
    }
    public function testForddecelerate() : void
    {
        $Ford = new Ford[];
        $this->assertEquals(1, $Ford->decelerate());
    }
    public function testAcceleration(): void
    {
        $this->assertEquals(2, Physics::acceleration(1, 2));
    }


}