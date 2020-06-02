<?php

namespace Tests\Feature;

use Storage;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends TestCase
{
    use DatabaseMigrations;

    private $user;

    function setUp(): void
    {
        parent::setUp();
        Storage::disk('public')->deleteDirectory('avatars');
        Storage::disk('public')->makeDirectory('avatars');
        $this->user = factory(User::class)->create();
    }

    /**
     * Test that a registered user has to
     * provide BOTH his username and email
     * alongside the password to be able
     * to login
     * @return void
     */

    /** @test */
    function a_user_can_login_by_email(): void
    {
        $this->withoutExceptionHandling();
        $this->post('/login', [
            'email' => $this->user->email,
            'password' => 'password'
        ]);
        $this->assertTrue(auth()->check());
    }

    /** @test */
    function a_user_shall_not_login_with_just_password(): void
    {
        $this->withoutExceptionHandling();
        $this->expectException('Illuminate\Validation\ValidationException');
        factory(User::class)->create();
        $this->post('/login', [
            'password' => 'password'
        ]);
    }

    /** @test */
    function a_user_shall_not_login_with_just_email(): void
    {
        $this->withoutExceptionHandling();
        $this->expectException('Illuminate\Validation\ValidationException');
        factory(User::class)->create();
        $this->post('/login', [
            'email' => $this->user->email,
        ]);
    }
}
