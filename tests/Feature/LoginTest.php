<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Storage;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use DatabaseMigrations;

    private $user;

    public function setUp(): void
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
     * to login.
     * @return void
     */

    /** @test */
    public function a_user_can_login_by_email(): void
    {
        $this->withoutExceptionHandling();
        $this->post('/login', [
            'email' => $this->user->email,
            'password' => 'password',
        ]);
        $this->assertTrue(auth()->check());
    }

    /** @test */
    public function a_user_shall_not_login_with_just_password(): void
    {
        $this->withoutExceptionHandling();
        $this->expectException('Illuminate\Validation\ValidationException');
        factory(User::class)->create();
        $this->post('/login', [
            'password' => 'password',
        ]);
    }

    /** @test */
    public function a_user_shall_not_login_with_just_email(): void
    {
        $this->withoutExceptionHandling();
        $this->expectException('Illuminate\Validation\ValidationException');
        factory(User::class)->create();
        $this->post('/login', [
            'email' => $this->user->email,
        ]);
    }
}
