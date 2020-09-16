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

   
    //Routes Auth
    Route::get('/login','Cpanel\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Cpanel\Auth\LoginController@login')->name('admin.login.submit');
    Route::get('/register', 'Cpanel\Auth\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'Cpanel\Auth\RegisterController@register');
    // Route::get('/','Cpanel\HomeController@index')->name('admin.home');
    Route::get('/logout', 'Cpanel\Auth\LoginController@logout')->name('admin.logout');
    Route::get('/password/reset','Cpanel\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email','Cpanel\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}','Cpanel\Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset','Cpanel\Auth\ResetPasswordController@reset')->name('admin.password.confirm');
  
    Route::group(['middleware' => ['admin']], function () { 
        
       
                //Routes Dashboard
                Route::get('/', 'Cpanel\Dashboard\DashboardController@index')->name('cpanel.admin.index');
                Route::get('dashboard', 'Cpanel\Dashboard\DashboardController@index');
            
                //Routes Admin
                Route::get('admin-index','Cpanel\Admin\AdminController@index');
                Route::get('admin-create','Cpanel\Admin\AdminController@create');
                Route::post('admin-store','Cpanel\Admin\AdminController@store'); 
                Route::get('admin-edit/{admin}/edit','Cpanel\Admin\AdminController@edit');
                Route::put('admin-update/{admin}','Cpanel\Admin\AdminController@update');
                Route::get('admin-delete/{admin}','Cpanel\Admin\AdminController@destroy');  

                //Routes Profile
                Route::get('Profile-index','Cpanel\Profile\ProfileController@index');
                Route::get('Profile-edit/{id}','Cpanel\Profile\ProfileController@edit');
                Route::post('Profile-update/{id}','Cpanel\Profile\ProfileController@update');

                //Route Slider
                Route::resource('slider', 'Cpanel\Slider\SliderController');
                //Route logo
                Route::resource('logo', 'Cpanel\Logo\LogoController');

                //Route category
                Route::resource('category', 'Cpanel\Category\CategoryController');

            //Route Sub Category 
                Route::resource('subcategory', 'Cpanel\SubCategory\SubCategoryController');
                Route::get('subcategory/{category}/category', 'Cpanel\SubCategory\SubCategoryController@index');

                //Routes Items
                Route::resource('item', 'Cpanel\Items\ItemController');
                Route::get('item/{subcategory}/subcategory', 'Cpanel\Items\ItemController@index');

                //Route partners 
                Route::resource('partner', 'Cpanel\Partner\PartnerController');
                //Route partners 
                Route::resource('supplier', 'Cpanel\Supplier\SupplierController');

                //Route phone
                Route::resource('phone', 'Cpanel\ContectUs\Phone\phoneController');

                //Route email
                Route::resource('email', 'Cpanel\ContectUs\Email\EmailController');

                //Route address
                Route::resource('address', 'Cpanel\ContectUs\Address\AddressController');

                //Route post
                Route::resource('post', 'Cpanel\Post\PostController');

                //Route job
                Route::resource('job', 'Cpanel\Job\JobController');
 
                //Route Jobs applicants
                Route::get('Jobs-applicants', 'Cpanel\RecruitmentForm\RecruitmentFormController@index');
        });
});
