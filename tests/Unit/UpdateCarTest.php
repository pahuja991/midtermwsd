<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class UpdateCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateCars()
    {
        //$this->assertTrue(true);
        $user = Car::find(2);
        $user->year='2000';
        $this->assertTrue($user->save());
    }
}