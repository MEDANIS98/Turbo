<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Profile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Profile  $profile
	 * @return \Illuminate\Http\Response
	 */
	public function show(Profile $profile)
	{
		//
	}

	/**
	 * Show the form for editing the user's profile.
	 *
	 * @return \Illuminate\View\View profile
	 */
	public function edit()
	{
		$profile = auth()->user()->profile;
		return view('profile', compact('profile'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Http\Requests\UpdateProfileRequest $request
	 * @param  \App\Profile $profile
	 * @return \Illuminate\Http\RedirectResponse back
	 */
	public function update(UpdateProfileRequest $request, Profile $profile): RedirectResponse
	{
		$profile->update([
			'phone' => $request->phone,
		]);
		auth()->user()->name = $request->name;
		auth()->user()->email = $request->email;
		auth()->user()->save();
		return back()->with('status', 'Profile updated successfully!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Profile  $profile
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Profile $profile)
	{
		//
	}
}
