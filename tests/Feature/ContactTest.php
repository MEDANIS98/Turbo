<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

class ContactTest extends TestCase
{
	use WithFaker;

	/**
	 * Test sending a contact email.
	 *
	 * @return void test results
	 */
	public function test_emails_can_be_sent(): void
	{
		$response = $this->post('/contact', $this->message());
		$response->assertRedirect('/contact#success'); // Assert a redirect
		$response->assertSessionHasNoErrors();
		$this->assertTrue(session()->exists('success'));
	}

	/**
	 * Message array
	 *
	 * Returns a fake array of data for a contact message
	 *
	 * @return array
	 **/
	private function message(): array
	{
		return [
			'name' => $this->faker->name,
			'contact_email' => $this->faker->email,
			'subject' => $this->faker->realText(20),
			'message' => $this->faker->realText(50),
			'Hacker' => '1337', // Tests request data trimming function
		];
	}
}
