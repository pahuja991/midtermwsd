<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class CheckCarYear extends TestCase
{
    /**
     * A basic test example.
     *
     *
     * @return void
     */
    public function testYearCars()
    {
        $car = Car::inRandomOrder()->first();
        $year = (int)$car->Year;
        $this->assertInternalType("int", $year);
    }
}