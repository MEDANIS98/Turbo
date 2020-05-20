<?php

namespace Tests\Feature;

use Tests\TestCase;

class PagesTest extends TestCase
{
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
}
