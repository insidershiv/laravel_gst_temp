<?php

use Illuminate\Support\Facades\Route;

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
//     return view('home')->middleware('auth');
// });

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('home');
   });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/addservice', 'add_service');


Route::view('/invoice', 'invoice');

// Route::view('/generateinvoice', 'generateinvoice');



// Route::get('/generateinvoice', 'ItemsController@items')->name('generateinvoice');



Route::group(['middleware' => 'admin'], function () {
   Route::view('/admin', 'admin.index');
   Route::get('/admin/newuser', 'Admin\CustomerController@showCustomerRegister');
});




Route::post('/ajax', 'ItemsController@addnew');

Route::view('/additem', 'add_items' );

Route::get('/itemlist', 'ItemsController@listItem');

// Route::view('/admin', 'invoice');

Route::view('/user', 'home');

Route::get('/show', 'ShowController@index');

Route::view('/story', 'Story.addstories');


use Spatie\QueryBuilder\QueryBuilder;

$users = QueryBuilder::for(User::class)
    ->allowedFilters('name')
    ->get();

// Route to bill page

// Route::group(['middleware' => 'auth'], function () {

// Route::get('/generateinvoice', 'ItemsController@items')->name('generateinvoice');
//    });
