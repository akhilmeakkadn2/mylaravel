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
    return view('welcome');
});
Route::get('fetchdata',[
             'as'   =>'fetch',
             'uses' =>'General@loaddata'
            ]);
Route::get('courselist',[
             'as'   =>'courselist',
             'uses' =>'General@courselist'
            ]);
Route::post('coursesave',[
             'as'   =>'coursesave',
             'uses' =>'General@store'
            ]);
