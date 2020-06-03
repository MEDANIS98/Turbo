<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\User;
use App\Order;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class OrderTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * Test User Relationship.
     *
     * Assert that the user property on the Order model returns an object
     * that is an instance of the User model
     *
     *
     **/
    public function testUserRelationship(): void
    {
        $user = create(User::class);
        $order = create(Order::class, ['user_id' => $user->id]);
        $this->assertInstanceOf(User::class, $order->user);
    }
}
