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

Auth::routes();
// Route::get('/user/logout', 'Auth\LoginController@logoutUser')->name('user.logout');

Route::get('/', 'Website\Home\HomeController@index')->name('website.home.index');
Route::get('/about', 'Website\About\AboutController@index')->name('website.about.index');
Route::get('/service', 'Website\Service\ServiceController@index')->name('website.service.index');
Route::get('/news', 'Website\News\NewsController@index')->name('website.news.index');
Route::get('/partner', 'Website\Partner\PartnerController@index')->name('website.partner.index');
Route::get('/job', 'Website\Job\JobController@index')->name('website.job.index');
Route::get('/contectUs', 'Website\ContectUs\ContectUsController@index')->name('website.contectUs.index');

// Route::get('/', 'Website\Home\HomeController@index')->name('home');
Route::get('/user/logout', 'Auth\LoginController@logoutUser')->name('user.logout');
Route::view('/about-us', 'website.aboutus.index');
Route::view('/Category', 'website.category.index');
Route::view('/news', 'website.news.index');
Route::view('/jobs', 'website.jobs.index');
Route::view('/partner', 'website.partner.index');
Route::view('/contectUs', 'website.contectus.index');
