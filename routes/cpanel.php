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

Route::group(['prefix' => 'admin'], function() {

    Route::get('/login','Cpanel\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Cpanel\Auth\LoginController@login')->name('admin.login.submit');
    Route::get('/register', 'Cpanel\Auth\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'Cpanel\Auth\RegisterController@register');
    // Route::get('/','Cpanel\HomeController@index')->name('admin.home');
    Route::get('/logout', 'Cpanel\Auth\LoginController@logout')->name('admin.logout');
    Route::get('/password/reset','Cpanel\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email','Cpanel\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}','Cpanel\Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset','Cpanel\Auth\ResetPasswordController@reset');
  
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
    Route::get('/user-add', 'UseraddContoller@index')->name('user.add');
    // list view user 
    Route::get('/user-list', 'UserlistContoller@index');
    //products view and edit delect in one page 
    Route::get('/Products', 'ProductsContoller@index');
    //footer controller
    Route::get('/footer', 'FooterContoller@index');
   
    Route::resource('category', 'Cpanel\Category\CategoryController');
    Route::resource('item', 'Cpanel\Items\ItemController');
    Route::get('item/{category}/category', 'Cpanel\Items\ItemController@index');
});
