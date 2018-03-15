<?php

use App\User;
use App\Profile;

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

Route::get('/', function() {

	$profile = new Profile;
	$profile->profile_pic = "dasdsafafsafsaf";
	$profile->user_id = 1;
	$profile->save();

	return $profile;
});

Route::get('/all', function() {

	return Profile::all();
});

Route::get('/profile/{id}', function($id) {

	return Profile::find($id);

});

Auth::routes();


Route::get('/{username}', function($username) {

	$user = User::where('email', $username)->get()->first();


	$members = User::all();

	$profiles = Profile::all();

	return view('profile', [
		'user' => $user,
		'members' => $members,
		'profiles' => $profiles
	]);


});

Route::get('/logout', function() {

	Auth::logout();
});