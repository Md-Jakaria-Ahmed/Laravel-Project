<?php

use Illuminate\Support\Facades\Route;


/*[-------------------------------------------------------------------------
	** LARAVEL PROJECT **
---------------------------------------------------------------------------]*/

Route::get('login','Auth\LoginController@login')->name('loginofme');
Route::post('login', 'Auth\LoginController@confirm')->name('login.confirm');





Route::view('/','welcome');

/* ---------------->   USERS  <----------------------------------------*/
//groups
Route::get('groups', 'UserGroupController@group');
Route::get('groups/create','UserGroupController@create');
Route::post('groups', 'UserGroupController@store');
Route::delete('groups/{id}', 'UserGroupController@destroy');

//users
Route::resource('users','UsersController');//user list

/*Route::get('users/{id}','UsersController@show'); // show the user by id
Route::get('users/create','UsersController@create'); //create user
Route::post('users','UsersController@store'); // 
Route::get('users/{id}/edit','UsersController@edit'); // edit user 
Route::put('users/{id}','UsersController@update'); // save update the edited form
Route::delete('users/{id}','UsersController@destroy');//delete
*/

/*----------------------------------------------------------------------*/
 

 //  Authintication




/*   ---------------------------------   */

Route::get('categories',function(){
	return view('products.category');
});

Route::get('purchase_item',function(){
	return view('products.purchase');
});

