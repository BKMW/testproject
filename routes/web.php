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
Route::get('contacts', function () {
    return view('contacts');
});
/*===show.blade.php->pageController======================================================*/
Route::get('show', 'pageController@show');
Route::post('storagepage', 'pageController@store');/*route to store title of page*/
Route::get('pages/{page}/delete', 'pageController@delete');/*delete page from database*/
Route::get('{page}', 'pageController@onepage');/*to display content of one page*/
/*===onepage.blade.php->noteController======================================================*/
Route::post('{page}/storagenote', 'noteController@store');/*route to store text of page into DB::notes*/
Route::get('{note}/edit', 'noteController@edit');/*route to edite form*/
Route::post('{note}/update', 'noteController@update');/*route to update text of page into DB::notes*/
