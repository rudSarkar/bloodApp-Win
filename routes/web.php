<?php

use App\User;
use App\District;
use App\Upazila;
use App\Http\Middleware\IsAdmin;
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

Route::get('/', 'SearchController@searchDonor');
Route::post('/', 'SearchController@searchDonor');

Auth::routes();

Route::resource('dashboard', 'DashboardController')->middleware(isAdmin::class);

Route::resource('user', 'UserController');

Route::get("/logout", function(){
	abort(404);
});

// Request blood
Route::resource('request_blood', 'BloodRequest')->only('index', 'create', 'store');

Route::get('/ajax-dis', function()
{
	$dis_id = Request::get('dis_id');
	$disShow = District::where('division_id', '=', $dis_id)->get();

	return Response::json($disShow);
});

Route::get('/ajax-upz', function()
{
	$dis_id = Request::get('dis_id');
	$disShow = Upazila::where('district_id', '=', $dis_id)->get();

	return Response::json($disShow);
});
