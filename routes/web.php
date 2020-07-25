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
Route::get('/',function(){
  return view('welcome');
});


//Route::namespace('admin')->prefix('admin')->group(function(){
  Route::get('/customers', 'CustomerController@index')->name('index');
  Route::get('/customers/create', 'CustomerController@create')->name('create');
  Route::get('/customers1', 'CustomerController@store')->name('store');
  Route::get('/customers/{id}', 'CustomerController@edit')->name('edit');
  Route::put('/customers/{id}', 'CustomerController@update')->name('update');
  Route::delete('/customers/{id}', 'CustomerController@delete')->name('delete');
//});

// Route::get('/home', 'HomeController@index')->name('home');
// route::resource('customer','CustomersController');