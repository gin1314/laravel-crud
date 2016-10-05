<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use Illuminate\Http\Request;
use App\User;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/user/all', function () {
	// paginate users 15 per page
	$users = User::withTrashed()->paginate(15);
	return view('users.all', compact(['users']));
});

Route::post('/user/bulk-delete', function (Request $request) {
    
    // soft delete users, iterate per id
    foreach ($request->get('user_ids') as $id => $value) {
    	$user = User::find($id);
    	$user->delete();
    }

	return back()->with('user_deleted', 'Successfully deleted users');
});

Route::get('/user/{user}/edit', function (User $user) {

	return view('users.edit', compact(['user']));

})->where('user', '[0-9]+');

Route::post('/user/{user}/edit', function (User $user, Request $request) {
    
    $user->update($request->all());

	return back()->withInput();

})->where('user', '[0-9]+');
