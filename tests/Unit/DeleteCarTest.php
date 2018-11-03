<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class DeleteCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteCars()
    {
        //$this->assertTrue(true);
        $user = Car::find(17);
        //$user->delete();
        $this->assertTrue($user->delete());
    }
}