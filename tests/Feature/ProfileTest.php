<?php

namespace Tests\Feature;

use Storage;
use App\User;
use App\Profile;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProfileTest extends TestCase
{
    use DatabaseMigrations;

    private object $user;

    public function setUp(): void
    {
        parent::setUp();
        Storage::disk('public')->deleteDirectory('avatars');
        Storage::disk('public')->makeDirectory('avatars');
        $this->user = create(User::class);
    }

    /**
     * Test profile.
     *
     * @return void
     */
    public function testProfileAvatar(): void
    {
        // Create a profile and set the user id to the user in the constructor
        $profile = create(Profile::class, [
            'user_id' => $this->user->id
        ]);
        $profile->addMedia(storage_path('app/public/' . $profile->avatar))
            ->toMediaCollection();
        $this->assertNotEquals('/images/avatar.png', $this->user->avatar);
    }
}
