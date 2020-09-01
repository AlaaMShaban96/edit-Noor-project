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


// Route url
Route::get('/', 'DashboardController@dashboardAnalytics');

// Route Dashboards
Route::get('/dashboard-analytics', 'DashboardController@dashboardAnalytics');
//news
Route::get('/news', 'NewsContoller@index');
//jobs
Route::get('/jobs', 'JobsContoller@index');
//slide
Route::get('/slide', 'SlideController@index');
//view single  user data 
Route::get('/user-view', 'UserviewContoller@index');
//add user
Route::get('/user-add', 'UseraddContoller@index');
// list view user 
Route::get('/user-list', 'UserlistContoller@index');
//products view and edit delect in one page 
Route::get('/Products', 'ProductsContoller@index');
//footer controller
Route::get('/footer', 'footerContoller@index');

