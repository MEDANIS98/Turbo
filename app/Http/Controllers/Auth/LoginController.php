<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\User;
use App\Profile;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles authenticating users for the application and
	| redirecting them to your home screen. The controller uses a trait
	| to conveniently provide its functionality to your applications.
	|
	*/

	use AuthenticatesUsers;

	/**
	 * Where to redirect users after login.
	 *
	 * @var string
	 */
	protected $redirectTo = RouteServiceProvider::HOME;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest')->except('logout');
	}

	public function redirectToProvider()
	{
		return Socialite::driver('google')->redirect();
	}

	public function handleProviderCallback()
	{
		$user = Socialite::driver('google')->user();
		// Check if already exist
		// $user = Socialite::driver('google')->userFromToken($user->token);
		$userModel = User::create([
			'name' => $user->getName(),
			'email' => $user->getEmail(),
			'email_verified_at' => now(),
			'token' => $user->token,
		]);
		Profile::create([
			'avatar' => $user->getAvatar(),
			'user_id' => $userModel->id,
		]);
		auth()->login($userModel, true);

		return redirect(RouteServiceProvider::HOME);
	}
}
