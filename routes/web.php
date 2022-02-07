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
Route::get('/', function(){
    return view('welcome');
});

Route::prefix('platforms')->group(function()
{
    Route::get('/', 'PlatformController@index')->name('platforms.index'); // Listado
    Route::get('/create', 'PlatformController@create')->name('platforms.create'); //vista creacion
    Route::post('/store', 'PlatformController@store')->name('platforms.store'); //y guardado
    Route::get('/{platform}/edit', 'PlatformController@edit')->name('platforms.edit');// edicion
    Route::post('/{platform}/update', 'PlatformController@update')->name('platforms.update');//guardado
    Route::delete('/{platform}/delete', 'PlatformController@delete')->name('platforms.delete'); //borrado
}
);