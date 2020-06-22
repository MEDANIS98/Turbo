<?php

declare(strict_types=1);

use App\User;
use App\Order;
use App\Profile;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		User::create([
			'name' => config('site.admin.name'),
			'email' => config('site.admin.email'),
			'email_verified_at' => now(),
			'password' => bcrypt('password'),
		]);
		factory(User::class, 5)->create()->each(function ($user) {
			$user->orders()->createMany(factory(Order::class, 5)->make()->toArray());
			factory(Profile::class)->create(['user_id' => $user->id]);
		});
	}
}
