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

Route::get('test',function(){
    return view('layouts.app');
});
Route::get('/', 'HomeController@index')->name('home');

Auth::routes();
Route::resource('company', 'CompanyController');
Route::resource('employee', 'EmployeeController');
Route::resource('users', 'UserController');
Route::get('set-locale/{locale}', function ($locale) {
    session()->forget('locale');
    session()->put('locale', $locale);
    App::setLocale($locale);

    return redirect()->back();
})->middleware('check.locale')->name('locale.setting');
