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

Auth::routes();
Route::get('/logout',function(){
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::group(['middleware' => 'auth'], function () {
	
	//*******************//
	//MASTERS
	//*******************//
	
	//ROLES
	Route::get('/masters/roles/list', 'Masters\RolesController@list')->name('listRoles');
	Route::get('/masters/roles/add', 'Masters\RolesController@add')->name('addRole');
	Route::get('/masters/roles/edit/{role}', 'Masters\RolesController@edit')->name('editRole');
	Route::get('/masters/roles/delete/{id}', 'Masters\RolesController@delete')->name('deleteRole');
	Route::post('/masters/roles/save', 'Masters\RolesController@save')->name('saveRole');


	Route::get('/', function () {
	    return view('theme1/dashboard');
	});

	Route::get('/category/add', function () {
	    return view('theme1/category/form');
	});
	
});

