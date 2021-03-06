<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'LetsCookController@Home');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


//Admin Routes
//export Nested Products Table to Products export Table

Route::get( 'admin' , ['middleware' => 'auth.basic', 'uses' => 'AdminController@LoadAdmin' ]  );


Route::post( 'article' , 'AdminController@AddArticle' );
Route::get( 'populate' , 'AdminController@PopulateTables' );
Route::get( 'user' , 'AdminController@CreateUser' );

Route::get( 'test' , 'AdminController@Test' );



Route::get( 'home' , 'LetsCookController@Home' );
Route::get( 'recipes/{id}' , 'LetsCookController@Recipes' );
Route::get( 'recipe/{id}/{title}' , 'LetsCookController@Recipe' );

//Report Broken Links
Route::get( 'report/{id}' , 'LetsCookController@Report' );


Route::get( 'search/{search}' , 'LetsCookController@Search' );













