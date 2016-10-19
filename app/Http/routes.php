<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Customer;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/savings', function() {
	 return view('savings');
});

Route::get('/customerStories', function() {
	 return view('customerStories');
});

Route::get('/getStarted', function() {
	 return view('getStarted');
});

Route::get('/about', function() {
	 return view('about');
});

Route::post('store', 'CustomersController@store');

Route::get('customers', 'CustomersController@index');

/*Route::get('customers/{id}', 'CustomersController@show');*/

Route::get('customers/{id}/edit', 'CustomersController@edit');

Route::post('customers/{id}/update', 'CustomersController@update');

Route::get('customers/{id}/delete', 'CustomersController@delete');

Route::delete('customers/{customer}/delete', function (Customer $customer) {

	//$customer = Customer::where('id', '=', $id)->get();
    //$customer[0]->delete();

	$customer->delete();
    return redirect('/customers');
});