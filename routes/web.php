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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('admin/path', function() {
    return view('admin.home_admin');
})->middleware('AuthAdmin:webadmin');

Route::get('/admin/home', 'Admin@index');

Route::get('view/users', 'Admin@view_users');


Route::get('admin/login','Admin@login_get');
Route::post('admin/login','Admin@login_post');
Route::get('admin/logout', function(){
    auth()->guard('webadmin')->logout();
    return redirect('admin/login');
    });

Route::resource('products', ProductController::class);

Route::get('display/product','Users@display_products');


Route::get('/contact-us', 'ContactUsController@contactUs')->name('contactUs');
Route::post('/insert_messages', 'ContactUsController@insert_messages');
Route::get('/all_messages', 'Admin@all_messages');

Route::get('product/show/{token}', 'Admin@product');

Route::get('add/card/{token}', 'Users@card_get');
Route::post('add/card/{token}', 'Users@card_post');

Route::resource('category', 'CategoryController');


