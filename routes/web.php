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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Routes

Route::middleware(['auth'])->group(function(){
   // Roles
   // crear
   Route::post('roles/store','RoleController@store')->name('roles.store')
      ->middleware('can:roles.create');

     // visualizar listado 
      Route::get('roles','RoleController@index')->name('roles.index')
      ->middleware('can:roles.index ');

     // ver formulario de creacion
      Route::get('roles/create','RoleController@create')->name('roles.create')
      ->middleware('can:roles.create');

      // bactualizar
      Route::put('roles/{role}','RoleController@update')->name('roles.update')
      ->middleware('can:roles.edit');

     // ver detalle
      Route::get('roles/{role}','RoleController@show')->name('roles.show')
      ->middleware('can:roles.show');
      
      // donde eliminar 
      Route::delete('roles/{role}','RoleController@destroy')->name('roles.destroy')
      ->middleware('can:roles.destroy');

     // ver formulario de edicion
      Route::get('roles/{role}/edit','RoleController@edit')->name('roles.edit')
      ->middleware('can:roles.edit');


      //Product
      Route::post('products/store','ProductController@store')->name('products.store')
      ->middleware('can:products.create');

     // visualizar listado 
      Route::get('products','ProductController@index')->name('products.index')
      ->middleware('can:products.index ');

     // ver formulario de creacion
      Route::get('products/create','ProductController@create')->name('products.create')
      ->middleware('can:products.create');

      // bactualizar
      Route::put('products/{role}','ProductController@update')->name('products.update')
      ->middleware('can:products.edit');

     // ver detalle
      Route::get('products/{role}','ProductController@show')->name('products.show')
      ->middleware('can:products.show');
      
      // donde eliminar 
      Route::delete('products/{role}','ProductController@destroy')->name('products.destroy')
      ->middleware('can:products.destroy');

     // ver formulario de edicion
      Route::get('products/{role}/edit','ProductController@edit')->name('products.edit')
      ->middleware('can:products.edit');

        //Usuarios
       
  
       // visualizar listado 
        Route::get('users','UserController@index')->name('users.index')
        ->middleware('can:users.index ');

  
        // bactualizar
        Route::put('users/{role}','UserController@update')->name('users.update')
        ->middleware('can:users.edit');
  
       // ver detalle
        Route::get('users/{role}','UserController@show')->name('users.show')
        ->middleware('can:users.show');
        
        // donde eliminar 
        Route::delete('users/{role}','UserController@destroy')->name('users.destroy')
        ->middleware('can:users.destroy');
  
       // ver formulario de edicion
        Route::get('users/{role}/edit','UserController@edit')->name('users.edit')
        ->middleware('can:users.edit');
  

});