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


Route::get('/', function () {
	return redirect()->action('ContactsController@index'); //redirect to /project on root acess
});	

Auth::routes(['verify' => true]);
Route::get('/thankyou', function () {
    return view('thankyou');
});

Route::get('/contacts', 'ContactsController@index')->name('contacts');

Route::get('/add-contacts', function () {
    return view('addcontacts');
});
Route::get('/create-contacts', 'ContactsController@create');

Route::get('/delete', 'ContactsController@delete');

Route::get('/edit-contacts/{id}', 'ContactsController@edit');
Route::get('/edit', 'ContactsController@update');