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
    return redirect()->route('products.create.step.one');
});

Route::get('forms', 'ProductController@index')->name('products.index');

Route::get('forms/step-one', 'ProductController@createStepOne')->name('products.create.step.one');
Route::post('forms/step-one', 'ProductController@postCreateStepOne')->name('products.create.step.one.post');
Route::get('forms/step-two', 'ProductController@createStepTwo')->name('products.create.step.two');
Route::post('forms/step-two', 'ProductController@postCreateStepTwo')->name('products.create.step.two.post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ask', 'HomeController@ask')->name('ask');
Route::match(['get','post'],'/ask/tambah-data', 'HomeController@askAdd')->name('tambah-kuesioner');
Route::get('/ask/kuesioner-delete/{id}', 'HomeController@delete');

