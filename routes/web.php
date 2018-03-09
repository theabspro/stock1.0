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
	
	//DASHBOARD
	Route::get('/', 'DashboardController@dashboard')->name('dashboard');
	
	//ROLES
	Route::get('/masters/roles/list', 'Masters\RolesController@list')->name('listRoles');
	Route::get('/masters/roles/add', 'Masters\RolesController@add')->name('addRole');
	Route::get('/masters/roles/edit/{role}', 'Masters\RolesController@edit')->name('editRole');
	Route::get('/masters/roles/delete/{id}', 'Masters\RolesController@delete')->name('deleteRole');
	Route::post('/masters/roles/save', 'Masters\RolesController@save')->name('saveRole');

	//USERS
	Route::get('/masters/users/list', 'Masters\UsersController@list')->name('listUsers');
	Route::get('/masters/users/add', 'Masters\UsersController@add')->name('addUser');
	Route::get('/masters/users/edit/{user}', 'Masters\UsersController@edit')->name('editUser');
	Route::get('/masters/users/delete/{user}', 'Masters\UsersController@delete')->name('deleteUser');
	Route::post('/masters/users/save', 'Masters\UsersController@save')->name('saveUser');

	//CATEGORY
	Route::get('/categories/list', 'CategoryController@list')->name('listCategories');
	Route::get('/categories/add', 'CategoryController@add')->name('addCategory');
	Route::get('/categories/edit/{category}', 'CategoryController@edit')->name('editCategory');
	Route::get('/categories/delete/{id}', 'CategoryController@delete')->name('deleteCategory');
	Route::post('/categories/save', 'CategoryController@save')->name('saveCategory');

	//BRANDS
	Route::get('/brands/list', 'BrandController@list')->name('listBrands');
	Route::get('/brands/add', 'BrandController@add')->name('addBrand');
	Route::get('/brands/edit/{brand}', 'BrandController@edit')->name('editBrand');
	Route::get('/brands/delete/{id}', 'BrandController@delete')->name('deleteBrand');
	Route::post('/brands/save', 'BrandController@save')->name('saveBrand');

	//PRODUCTS
	Route::get('/products/list', 'ProductController@list')->name('listProducts');
	Route::get('/products/add', 'ProductController@add')->name('addProduct');
	Route::get('/products/edit/{product}', 'ProductController@edit')->name('editProduct');
	Route::get('/products/delete/{id}', 'ProductController@delete')->name('deleteProduct');
	Route::post('/products/save', 'ProductController@save')->name('saveProduct');

	//CUSTOMERS
	Route::get('/customers/list', 'CustomerController@list')->name('listCustomers');
	Route::get('/customers/add', 'CustomerController@add')->name('addCustomer');
	Route::get('/customers/edit/{stock}', 'CustomerController@edit')->name('editCustomer');
	Route::get('/customers/delete/{id}', 'CustomerController@delete')->name('deleteCustomer');
	Route::post('/customers/save', 'CustomerController@save')->name('saveCustomer');

	//STOCK
	Route::get('/stock/list', 'StockController@list')->name('listStock');
	Route::get('/stock/add', 'StockController@add')->name('addStock');
	Route::post('/stock/save', 'StockController@save')->name('saveStock');

	//SALES
	Route::get('/sales/lsit', 'SalesController@list')->name('listSales');
	Route::get('/sales/new', 'SalesController@new')->name('newSale');
	Route::get('/sales/edit/{stock}', 'SalesController@edit')->name('editSale');
	Route::get('/sales/delete/{id}', 'SalesController@delete')->name('deleteSale');
	Route::post('/sales/save', 'SalesController@save')->name('saveSale');

	//GENERAL

	Route::get('/get-product-detail/{product}', 'GeneralController@getProductDetail')->name('getProductDetail');
	Route::get('/get-product-stocks/{product}', 'GeneralController@getProductStocks')->name('getProductStocks');


});

