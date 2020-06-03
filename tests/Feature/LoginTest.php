<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends TestCase
{
    use DatabaseMigrations;

    private $user;

    public function setUp(): void
    {
        parent::setUp();
        $this->user = factory(User::class)->create();
    }

    /**
     * Test that a registered user has to
     * provide BOTH his username and email
     * alongside the password to be able
     * to login.
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

    /** @test */
    public function a_user_shall_be_redirected_if_logged_in(): void
    {
        $this->login();
        $response = $this->post('/login', [
            'email' => $this->user->email,
            'password' => 'password',
        ]);
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    /**
     * Test unauthenticated redirect.
     *
     * Assert that unauthenticated access attempt redirects to login
     *
     **/
    public function testUnauthenticatedRedirection(): void
    {
        $response = $this->get('/dashboard');
        $response->assertRedirect('/login');
    }
}
