<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class CheckModelStringTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testModelStringCars()
    {
        $car = Car::inRandomOrder()->first();
        $model = $car->Model;
        $this->assertInternalType("string", $model);
    }
}