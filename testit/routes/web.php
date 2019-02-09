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
return view("index");
});
Route::get('add-contact', 'ContactsController@AddContact');
Route::get('all_contact', 'ContactsController@AllContact')->name('all.contact');
Route::post('insert-contact', 'ContactsController@InsertContact');
Route::get('delete-contact/{id}', 'ContactsController@DeleteContact');
Route::get('show-contact/{id}', 'ContactsController@ShowContact');
Route::get('edit-contact/{id}', 'ContactsController@EditContact');
Route::post('update-contact/{id}', 'ContactsController@UpdateContact');