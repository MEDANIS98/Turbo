<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EmailVerificationTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * Assert registered users can verify their email
     *
     * @return void
     */
    public function test_email_verification(): void
    {
        $user = create(User::class, [], 'make')->toArray(); // Make an in memory user data array
        // Remove verification timestamp to force verification email
        $user = array_except($user, 'email_verified_at');
        $credentials = ['password' => 'password', 'password_confirmation' => 'password'];
        $response = $this->post('/register', array_merge($user, $credentials));
        // Get the log information
        $log = $this->getLogInfo();
        $this->assertVerificationEmailIsLogged($log, $user['email']);
        $response = $this->get($this->getVerificationUrl($user['email'], $log));
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    /**
     * Test verification email is logged
     *
     * assert that registered users receive a url to verify email
     *
     * @param array $log log content
     * @param string $email The receiving registered user email
     **/
    public function assertVerificationEmailIsLogged($log, $email, $id = 1): void
    {
        $indexOfLoggedEmail = $this->getIndexOfAloggedMessage($email, $log);
        $this->assertStringContainsString("To: $email", $log[$indexOfLoggedEmail], "No emails were found.\n");
        $this->assertStringContainsString(
            // 1 => user ID
            config('app.url') . "/email/verify/$id/",
            $log[$indexOfLoggedEmail + 60], // Jump by 5 lines to find link
            "No links were found.\n"
        );
    }

    /**
     * Get verification link
     *
     * Extract application relative URI to verify email
     *
     * @param string $email User's email to extract verification url for
     * @param array $log log content
     * @return string the relative url to verify email
     **/
    public function getVerificationUrl(string $email = null, $log): string
    {
        $indexOfLoggedLink = $this->getIndexOfAloggedMessage($email, $log);
        $indexOfLoggedLink = $indexOfLoggedLink + 118;
        $fullLink = $log[$indexOfLoggedLink];
        $fullLink = str_replace_first(__('Verify Email Address'), '', $fullLink);
        $fullLink = ltrim($fullLink, ': ');
        // Remove trailing space from link
        $fullLink = rtrim($fullLink);
        // Extract as a relative URL
        $fullLink = str_replace_first(config('app.url'), '', $fullLink);
        return $fullLink;
    }
}
