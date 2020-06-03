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

    private object $user, $profile;

    public function setUp(): void
    {
        parent::setUp();
        Storage::disk('public')->deleteDirectory('avatars');
        Storage::disk('public')->makeDirectory('avatars');
        $this->user = create(User::class);
        $this->profile = create(Profile::class, [
            'user_id' => $this->user->id
        ]);
    }

    /**
     * Test profile.
     *
     * @return void
     */
    public function testProfileAvatar(): void
    {
        // Create a profile and set the user id to the user in the constructor
        $this->profile->addMedia(storage_path('app/public/' . $this->profile->avatar))
            ->toMediaCollection();
        $this->assertNotEquals('/images/avatar.png', $this->user->avatar);
        $this->assertNotEquals('/images/avatar.png', $this->user->accountMenuAvatar);
    }
}
