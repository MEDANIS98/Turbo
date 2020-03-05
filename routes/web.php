<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/lang/{locale}', 'LocalizationController@switch')
			->name('locale')
			->where('locale', '(en|fr|ar)');


// views
Route::view('/', 'index');
Route::view('/about', 'about');
Route::view('/login', 'login');
Route::view('/wishlist', 'wishlist');
Route::view('/cart', 'cart');
Route::view('/contact', 'contact');
Route::view('/track-order', 'track-order');
Route::view('/terms', 'terms');
Route::view('/faq', 'faq');
Route::view('/components','components');
Route::view('/typography','typography');
Route::view('/checkout','checkout');
Route::view('/wishlist','wishlist');
Route::view('/compare','compare');
Route::view('/product','product');
Route::view('/login','login');
Route::view('/garage','garage');
Route::view('/dashboard','dashboard');
Route::view('/account-addresses','account-addresses');
Route::view('/account-password','account-password');
Route::view('/account-orders','account-orders');
Route::view('/account-profile','account-profile');
Route::view('/shop-list','shop-list');
Route::view('/shop-table','shop-table');
Route::view('/shop-right-sidebar','shop-right-sidebar');
Route::view('/shop-right-sidebar','shop-right-sidebar');
Route::view('/post-right','post-right');
Route::view('/post-left','post-left');
Route::view('/post-width','post-width');
Route::view('/blog-classic-left','blog-classic-left');
Route::view('/blog-classic-right','blog-classic-right');
Route::view('/category-3-sidebar','category-3-sidebar');
Route::view('/category-4-sidebar','category-4-sidebar');
Route::view('/category-5-sidebar','category-5-sidebar');
Route::view('/category-4-full','category-4-full');
Route::view('/category-5-full','category-5-full');
Route::view('/category-6-full','category-6-full');
Route::view('/category-7-full','category-7-full');
Route::view('/category-right-sidebar','category-right-sidebar');

