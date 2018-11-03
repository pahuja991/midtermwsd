<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class CarCountTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCountCars()
    {
        //$this->assertTrue(true);
        $user = Car::all();
        $count= $user->count();
        $this->assertEquals(50,$count);
    }
}