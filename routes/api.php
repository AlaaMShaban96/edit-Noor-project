<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('/category', 'Cpanel\Category\CategoryController');

//Route post
Route::resource('post', 'Cpanel\Post\PostController');

    //Route Slider
    Route::resource('slider', 'Cpanel\Slider\SliderController');

      //Route job
      Route::resource('job', 'Cpanel\Job\JobController');