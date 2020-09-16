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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();
// Route::get('/user/logout', 'Auth\LoginController@logoutUser')->name('user.logout');
 
Route::get('/', 'Website\Home\HomeController@index')->name('website.home.index');
Route::get('/about', 'Website\About\AboutController@index')->name('website.about.index');
Route::get('/category', 'Website\Service\ServiceController@index')->name('website.category.index');
Route::get('/category/subcategory/{subCategory}', 'Website\Service\ServiceController@show')->name('website.category.index');
Route::get('/category/{category}', 'Website\Service\ServiceController@showSubCategory')->name('website.category.index');
Route::get('/news', 'Website\News\NewsController@index')->name('website.news.index');
Route::get('/news/{post}', 'Website\News\NewsController@show')->name('website.news.index');
Route::get('/partner', 'Website\Partner\PartnerController@index')->name('website.partner.index');
Route::get('/partner/{partner}', 'Website\Partner\PartnerController@show')->name('website.partner.index');
Route::get('/job', 'Website\Job\JobController@index')->name('website.job.index');
Route::get('/job/{job}/apply', 'Website\Job\JobController@apply');
Route::get('/job/{job}/detils', 'Website\Job\JobController@detils');
Route::get('/contectUs', 'Website\ContectUs\ContectUsController@index')->name('website.contectUs.index');

  
Route::get('/user/logout', 'Auth\LoginController@logoutUser')->name('user.logout');
Route::view('/about-us', 'website.about.index');
// Route::view('/category', 'website.category.index');
// Route::view('/news', 'website.news.index');  
Route::view('/jobs', 'website.jobs.index');
// Route::view('/partner', 'website.partner.index');
// Route::view('/contectUs', 'website.contectus.index');
