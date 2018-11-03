<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class CheckCarMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMakeCars()
    {
        $car = Car::inRandomOrder()->first();
        $this->assertContains($car->Make, ["honda","toyota","ford"]);
    }
}