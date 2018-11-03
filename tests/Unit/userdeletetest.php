<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class userdeletetest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDelete()
    {
        //$this->assertTrue(true);
        $user = User::find(50);
        $user->delete();
        $this->assertTrue($user->save());
    }
}