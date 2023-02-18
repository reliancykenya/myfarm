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


Route::get('/crops', 'CropController@index')->name('crops.index');
Route::get('/crops/create', 'CropController@create')->name('crops.create');
Route::post('/crops', 'CropController@store')->name('crops.store');
Route::get('/crops/{id}', 'CropController@show')->name('crops.show');
Route::get('/crops/{id}/edit', 'CropController@edit')->name('crops.edit');
Route::put('/crops/{id}', 'CropController@update')->name('crops.update');
Route::delete('/crops/{id}', 'CropController@destroy')->name('crops.destroy');

Route::get('/inventory', 'InventoryController@index')->name('inventory.index');
Route::get('/inventory/create', 'InventoryController@create')->name('inventory.create');
Route::post('/inventory', 'InventoryController@store')->name('inventory.store');
Route::get('/inventory/{id}', 'InventoryController@show')->name('inventory.show');
Route::get('/inventory/{id}/edit', 'InventoryController@edit')->name('inventory.edit');
Route::put('/inventory/{id}', 'InventoryController@update')->name('inventory.update');
Route::delete('/inventory/{id}', 'InventoryController@destroy')->name('inventory.destroy');

Route::get('/livestock', 'LivestockController@index')->name('livestock.index');
Route::get('/livestock/create', 'LivestockController@create')->name('livestock.create');
Route::post('/livestock', 'LivestockController@store')->name('livestock.store');
Route::get('/livestock/{id}', 'LivestockController@show')->name('livestock.show');
Route::get('/livestock/{id}/edit', 'LivestockController@edit')->name('livestock.edit');
Route::put('/livestock/{id}', 'LivestockController@update')->name('livestock.update');
Route::delete('/livestock/{id}', 'LivestockController@destroy')->name('livestock.destroy');

Route::get('/expenses', 'ExpenseController@index')->name('expenses.index');
Route::get('/expenses/create', 'ExpenseController@create')->name('expenses.create');
Route::post('/expenses', 'ExpenseController@store')->name('expenses.store');
Route::get('/expenses/{id}', 'ExpenseController@show')->name('expenses.show');
Route::get('/expenses/{id}/edit', 'ExpenseController@edit')->name('expenses.edit');
Route::put('/expenses/{id}', 'ExpenseController@update')->name('expenses.update');
Route::delete('/expenses/{id}', 'ExpenseController@destroy')->name('expenses.destroy');
