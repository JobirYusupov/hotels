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
    return view('index');
})->name('index');
Route::get('/home', function () {
    return view('index');
});
Route::get('/regions', function (){
    return view('regions.index');
})->name('regions.index');
Route::get('/hotelsByCategory/{region_id?}', 'HotelController@index')->name('hotelsByRegion');


Route::get('/contact', function (){
    return view('contact');
})->name('contact');

Route::get('/lang/{lang}', function ($lang){
    session()->put('lang', $lang);
    return redirect()->back();
})->name('lang');

Route::post('/SendMail',  'MailController@SendMail')->name('SendMail');

Auth::routes();

Route::get('/admin', 'HotelController@index')->name('home')->middleware(\App\Http\Middleware\Admin::class);

