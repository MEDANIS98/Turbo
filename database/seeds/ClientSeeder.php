<?php

use App\Client;
use App\User;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$ids = User::select('id')->pluck('id');
		foreach ($ids as $id) {
			factory(Client::class, 50)->create(['user_id' => $id]);
		}
	}
}
