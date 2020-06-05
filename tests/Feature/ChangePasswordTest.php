<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ChangePasswordTest extends TestCase
{
    use DatabaseMigrations;

    private object $user;

    public function setUp(): void
    {
        parent::setUp();
        $this->user = create(User::class);
        $this->login($this->user);
    }

    /**
     * Test users can change their password.
     *
     * @return void
     */
    public function testPasswordChange(): void
    {
        $this->post('/password/confirm', ['password' => 'password']);
        $response = $this->post('/account/change-password', [
            'new_password' => 'New Password',
            'new_password_confirmation' => 'New Password'
        ]);
        $response->assertRedirect('/');
        $response->assertSessionHas('message', __('Password has successfully been changed'));
    }

    /**
     * Test users can confirm their password.
     *
     * Assert that sudo mode can be entered.
     *
     * @return void
     **/
    public function testUsersCanConfirmPassword(): void
    {
        $response = $this->post('/password/confirm', ['password' => 'password']);
        $response->assertRedirect('/dashboard');
        $response = $this->get('/account/password');
        $response->assertOk();
    }

    /**
     * Test password confirmation middleware.
     *
     * Asserts a user is redirected to confirm their password,
     * when attempting to access a route protected
     * by the password confirmation middleware
     *
     * @return void
     **/
    public function testPasswordConfirmationRedirect(): void
    {
        $response = $this->get('/account/password');
        $response->assertRedirect('/password/confirm');
    }
}
