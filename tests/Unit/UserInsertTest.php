<?php
namespace Tests\Unit;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class UserInsertTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertUser() {

        $user = new User();
        $user->name = "Rohit Pahuja";
        $user->email = "rp824@njit.edu";
        $user->password = "woooow";
        $this->assertTrue($user->save());



    }
}