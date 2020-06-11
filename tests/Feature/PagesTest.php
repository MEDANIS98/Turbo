<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PagesTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * Test index page.
     *
     * @return void
     */
    public function testIndexPage()
    {
        $response = $this->get('/');

        $response->assertOk();
    }

    /**
     * Test index page.
     *
     * @return void
     */
    public function testAboutPage()
    {
        $response = $this->get('/about');

        $response->assertOk();
    }

    /**
     * Test index page.
     *
     * @return void
     */
    public function testNotFoundPage()
    {
        $response = $this->get('/something');

        $response->assertNotFound();
    }

    /**
     * Test dashboard page.
     */
    public function testDashboardPage(): void
    {
        $this->withoutExceptionHandling();
        $this->login();
        $response = $this->get(RouteServiceProvider::HOME);
        $response->assertOk();
    }
}
