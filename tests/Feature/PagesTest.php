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
	public function test_index_page()
	{
		$response = $this->get('/');

		$response->assertOk();
	}

	/**
	 * Test index page.
	 *
	 * @return void
	 */
	public function test_about_page()
	{
		$response = $this->get('/about');

		$response->assertOk();
	}

	/**
	 * Test index page.
	 *
	 * @return void
	 */
	public function test_not_found_page()
	{
		$response = $this->get('/something');

		$response->assertNotFound();
	}

	/**
	 * Test dashboard page.
	 */
	public function test_dashboard_page(): void
	{
		$this->login();
		$response = $this->get(RouteServiceProvider::HOME);
		$response->assertOk();
	}
}
