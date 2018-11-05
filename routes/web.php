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


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/',[
    'uses'      => 'PropertyController@index',
    'as'        => '/'
]);
Route::get('/get-users', 'UserController@getUsers');

Route::post('/{id}/update-user', 'UserController@updateUser');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*Route::resource('/enter', 'PropertyController');*/
Route::get('/property-home', 'PropertyController@index')->name('property-home');
/*Route::resource('/enter/', 'PropertyController@addItem');*/
Route::post('/insert', 'PropertyController@store');

Route::get('/customers/{id}/edit', array(
	'as' => 'customers-edit',
	'uses' => 'CustomerController@edit'
));
/*Route::get('/customers/{id}/edit', array(
	'as' => 'customers-edit',
	'uses' => 'CustomerController@edit'
));*/

/**
* Update Specific Customer
*/
Route::patch('/update/{id}', array(
	'uses' => 'PropertyController@update',
	'as'    =>  'update'
));
Route::get('property/{id}/edit', array(
	'uses' => 'PropertyController@edit',
	'as'    =>  'edit'
));
Route::get('property/{id}/delet', array(
	'uses' => 'PropertyController@destroy',
	'as'    =>  'delet'
));
/*Route::get('page/individual',[
    'uses'  => 'IndividualController@index',
    'as'    =>  'individual'
]);*/
Route::get('/enter', 'PropertyController@addItem')->name('enter');

Route::get('vehicle-home', 'VehileController@index')->name('vehicle-home');
Route::get('/vehicle-enter', 'VehileController@addItem')->name('vehicle-enter');
Route::post('/vehicle-store', 'VehileController@store')->name('vehicle-store');

Route::patch('/update/{id}', array(
	'uses' => 'VehileController@update',
	'as'    =>  'update'
));
Route::get('vehicle/{id}/edit', array(
	'uses' => 'VehileController@edit',
	'as'    =>  'edit'
));
Route::get('vehicle/{id}/delet', array(
	'uses' => 'VehileController@destroy',
	'as'    =>  'delet'
));





Route::get('/show', 'PropertyController@show')->name('show');

Route::post('addstudent', 'StudentController@addItem');
Route::get('student', 'StudentController@index')->name('student');
Route::get('student-view', 'StudentController@show')->name('student-show');
Route::get('editItem', 'StudentController@editItem')->name('edititem');

Route::get('/profile','UserController@profile')->name('Profile');;
/*--------------------Start Testing---------------------------*/

Route::get('test', ['uses' => 'TestController@index']);
Route::post('test/update/{id}', ['as' => 'test/update', 'uses' => 'TestController@update']);
Route::post('test/bulk_update', ['as' => 'test/bulk_update', 'uses' => 'TestController@bulk_update']);



Route::get('ajaxdata', 'AjaxdataController@index')->name('ajaxdata');
Route::get('ajaxdata/getdata', 'AjaxdataController@getdata')->name('ajaxdata.getdata');

Route::post('ajaxdata/postdata', 'AjaxdataController@postdata')->name('ajaxdata.postdata');

Route::get('ajaxdata/fetchdata', 'AjaxdataController@fetchdata')->name('ajaxdata.fetchdata');



Route::get('/grocery', 'GroceryController@index');
Route::post('/grocery/post', 'GroceryController@store');

