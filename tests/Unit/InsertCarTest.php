<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class InsertCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertCars()
    {
        //$this->assertTrue(true);
        $user = new Car();
        //$user->id=52;
        $user->make='Toyota';
        $user->model = 'car1';
        $user->year = '2018';
        $this->assertTrue($user->save());
    }
}