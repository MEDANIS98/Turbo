<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterTest extends TestCase
{
    use DatabaseMigrations, RefreshDatabase;

    /**
     * Test users can register.
     *
     * @return void
     */

    /** @test */
    function a_user_can_signup(): void
    {
        $fakeUser = factory(User::class)->make()->toArray();
        $user = $fakeUser;
        $user['password'] = 'password';
        $user['password_confirmation'] = 'password';
        $this->post('/register', $user);
        $fakeUser['email_verified_at'] = null;
        $this->assertDatabaseHas('users', $fakeUser);
    }
}
