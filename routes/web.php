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

//Route::get('permiso/{nombre}/{slug?}', 'PermisoController@index');
//Route::view('permiso', 'permiso');
//Route::get('admin/sistema/permisos','PermisoController@index')->name('permiso');

Route::get('/','InicioController@index');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('permiso', 'PermisoController@index')->name('permiso');
    Route::get('permiso/crear', 'PermisoController@crear')->name('crear-permiso');
    Route::get('menu', 'MenuController@index')->name('menu');
    Route::get('menu/crear', 'MenuController@crear')->name('crear-menu');
    Route::post('menu', 'MenuController@guardar')->name('guardar-menu');
});
